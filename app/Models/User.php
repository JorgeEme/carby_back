<?php

namespace App\Models;

use App\Exceptions\Auth\IncorrectLoginException;
use App\General;
use App\Http\Resources\UserResource;
use App\Mail\WelcomeMail;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Laravel\Passport\HasApiTokens;
use TCG\Voyager\Models\Role;
use Laravel\Cashier\Billable;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    const PAGINATION = 20;
    const IMG_FOLDER = 'users/';
    const IMG_WIDTH = 1200;
    const IMG_HEIGHT = 1200;
    const CLASS_NAME = "App\\User";

    //PAGINATION
    protected $perPage = self::PAGINATION;

    //AVATARS
    const ROUNDED = true;
    const BOLD = true;
    const LENGHT = 2;
    const SIZE = 128;
    const FORMAT = 'svg';
    const COLOR = 000000;

    protected $table = 'users';

    protected $fillable = [
        'type_id', 'name', 'surnames', 'email', 'password', 'notifications', 'phone', 'address', 'lat', 'lng', 'avatar', 'lang', 'remember_token', 'settings',
        'birth_date', 'card_front', 'card_back', 'validated', 'nif_front', 'nif_back','device_token', 'device_type',
    ];

    protected $hidden = [
        'password', 'remember_token', 'settings'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $with = ['rol'];

    protected $appends = ['full_name', 'avatar_url', 'card_front_url', 'card_back_url', 'nif_front_url', 'nif_back_url'];


    // RELATIONSHIPS 🔀

    /**
     * Get the rol that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function accessTokens()
    {
        return $this->hasMany(AccessToken::class);
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'user_id', 'id');
    }

    public function journeys(): HasMany
    {
        return $this->hasMany(Journey::class, 'user_id', 'id');
    }

    // SCOPES 🔎
    public function scopePushable($query)
    {
        return $query->notifiable()->where([
            ['device_token', '!=', null],
            ['device_type', '!=', null],
        ]);
    }

    public function scopeNotifiable($query)
    {
        return $query->where('notifications', true);
    }

    // APPENDS 🔧

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->surnames;
    }

    public function getAvatarUrlAttribute()
    {
        return URL::asset('storage/' . $this->avatar);
    }

    public function getCardFrontUrlAttribute()
    {
        return URL::asset('storage/' . $this->card_front);
    }

    public function getCardBackUrlAttribute()
    {
        return URL::asset('storage/' . $this->card_back);
    }

    public function getNifFrontUrlAttribute()
    {
        return URL::asset('storage/' . $this->nif_front);
    }

    public function getNifBackUrlAttribute()
    {
        return URL::asset('storage/' . $this->nif_back);
    }

    // MUTATORS 🐍


    // FUNCTIONS 📲

    /**
     * Function that check the email and password and return user
     * with token if attempt it's successfully
     *
     * @return array
     */
    public static function login(array $params): array
    {
        if (!Auth::attempt($params))
            throw new IncorrectLoginException();

        //Get Current User
        $user = auth()->user();
        // Assign Token
        return $user->setUserToken();
    }


    /**
     * Create the User with the validated request parameters
     * that are in the '$fillable' attribute of the model.
     *
     * @param array $params
     * @return User
     * @throws CantRegisterUserException
     */
    public static function register($params, $media): self
    {
        // Encrypt Password
        if (isset($params['password'])) {
            $params['password'] = Hash::make(($params['password']));
        }

        $register = self::create($params);

        if (!$register) dd('err');

        if (isset($params['nif'])) {
            $i = 0;
            foreach ($params['nif'] as $media) {
                $image = General::uploadImage($media, 'users/' . $register->id . '/');

                if ($i == 0) $register->update(['nif_front' => $image]);
                else $register->update(['nif_back' => $image]);
                ++$i;
            }
        }

        if (isset($params['card'])) {
            $i = 0;
            foreach ($params['card'] as $media) {
                $image = General::uploadImage($media, 'users/' . $register->id . '/');

                if ($i == 0) $register->update(['card_front' => $image]);
                else $register->update(['card_back' => $image]);
                ++$i;
            }
        }

        // $register->uploadImageProfile($media);

        Mail::to($register->email)->send(new WelcomeMail($register));

        return $register;
    }

    public function logout(): bool
    {
        $this->revokeAccessToken();

        Auth::guard('web')->logout();

        return true;
    }

    public function uploadImageProfile($media)
    {
        if ($media) {
            $img =  General::uploadImage($media, self::IMG_FOLDER . $this->id);

            $this->update([
                'avatar' => $img->avatar,
            ]);
        } else {
            $path = General::createAvatar($this);

            $this->update([
                'avatar' => $path,
            ]);
        }
    }

    /**
     * Function that creates the authentication token
     *
     * @return array
     */
    public function setUserToken(): array
    {
        $tokenResult = $this->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();

        return [
            'user' => UserResource::make($this),
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
        ];
    }

    /**
     * Function to revoke a user's access_token
     *
     * @return bool
     */
    public function revokeAccessToken(): bool
    {
        $lastToken = $this->accessTokens()->unrevoked()->first();

        return $lastToken->update([
            'revoked'  => true,
        ]);
    }

    // RULES 📐

    public static $loginRules = [
        'email'     => ['required', 'string', 'email', 'max:100'],
        'password'  => ['required', 'string', 'min:8', 'max:50'],
    ];

    public static $registerRules = [
        'email'     => ['required', 'string', 'email', 'unique:users', 'max:100'],
        'password'  => ['required', 'string', 'min:8', 'max:50'],
        'name'      => ['required', 'string', 'max:200'],
    ];

    public static $changePasswordRules = [
        'current_password'  => ['required', 'string', 'min:8', 'max:50'],
        'new_password'      => ['required', 'string', 'min:8', 'max:50'],
    ];

    public static $updateNotificationsRules = [
        'notifications'     => ['required', 'boolean'],
    ];

    public static $editProfileRules = [
        'name'       => ['required', 'string', 'max:200'],
        'surnames'   => ['nullable', 'string', 'max:200'],
        'phone'      => ['nullable', 'string', 'min:9', 'max:30'],
        'address'    => ['nullable', 'string', 'max:200'],
        'birth_date' => ['nullable', 'date', 'date_format:Y-m-d']
    ];

    public static $updatePush = [
        'device_token' => ['required', 'string'],
        'device_type'  => ['required', 'integer'],
    ];


    // "address": "Carrer de Sants",
    // "birth_date": "1999-02-01"

}
