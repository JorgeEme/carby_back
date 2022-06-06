<?php

namespace App\Http\Controllers;

use App\Exceptions\Auth\IncorrectLoginException;
use App\General;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\DeviceTokenRequest;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\NotificationsRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\GetVehiclesAvailableResource;
use App\Http\Resources\UserResource;
use App\Mail\ForgetPassword;
use App\Models\Journey;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use TCG\Voyager\Facades\Voyager;

use function App\Helpers\ko;
use function App\Helpers\ok;

class AuthController extends Controller
{

    public function register(RegisterRequest $request)
    {
        $params = $request->all();
        $register = User::register($params, $request->media);

        return config('app.custom.login_at_register') ? $this->login(new LoginRequest($params)) : ok($register);
    }


    public function login(LoginRequest $request)
    {
        return ok(User::login($request->all()));
    }

    public function logout()
    {
        $user = auth()->user();

        $user->logout();

        return ok(true);
    }

    public function uploadCard(Request $request)
    {
        $user = auth()->user();

        if ($request->card_front) {
            $image = General::uploadImage($request->card_front, User::IMG_FOLDER);
            $user->update(['card_front' => $image]);
        }

        if ($request->card_back) {
            $image = General::uploadImage($request->card_back, User::IMG_FOLDER);
            $user->update(['card_back' => $image]);
        }

        return ok(true);
    }

    public function uploadNif(Request $request)
    {
        $user = auth()->user();

        if ($request->nif_front) {
            $image = General::uploadImage($request->nif_front, User::IMG_FOLDER);
            $user->update(['nif_front' => $image]);
        }

        if ($request->nif_back) {
            $image = General::uploadImage($request->nif_back, User::IMG_FOLDER);
            $user->update(['nif_back' => $image]);
        }

        return ok(true);
    }

    public function getCurrentUser(Request $request)
    {
        $user = auth()->user();
        return ok(UserResource::make($user));
    }

    public function getUser(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user)
            return ko(__('custom_messages.users_not_found'));

        return ok(UserResource::make($user));
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $user = auth()->user();

        $correctPassword = Auth::guard('web')->attempt(['email' => $user->email, 'password' =>  $request->current_password]);

        if (!$correctPassword)
            return ko(__('custom_messages.wrong_current_password'));

        $password = Hash::make($request->new_password);

        $user->update(['password' => $password]);

        return ok(true);
    }

    public function editNotifications(NotificationsRequest $request)
    {
        $user = auth()->user();
        return $user->update($request->all()) ? ok(true) : ko(__('custom_messages.cannot_update'));
    }

    public function delete()
    {
        $user = auth()->user();

        self::logout();

        $user->delete();

        return ok(true);
    }

    public function update(EditProfileRequest $request)
    {
        $user = auth()->user();

        $user->update($request->all());

        if ($request->media) {
            $image = General::uploadImage($request->media, User::IMG_FOLDER);
            $user->update(['avatar' => $image]);
        }

        return ok(User::find(auth()->id()));
    }

    public function forget(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $token = Str::random(64);
            $user->update(['remember_token' => $token]);
            Mail::to($user->email)->send(new ForgetPassword($user, $token));
        }

        return ok(true);
    }

    public function validateToken(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || $request->token != $user->remember_token) return view('error');

        return view('recover', ['token' => $request->token, 'email' => $user->email]);
    }

    public function recoverPassword(Request $request)
    {
        $validator = Validator::make($request->all(), ['password' => 'required|confirmed|min:8']);

        if ($validator->fails()) return back()->withErrors(['error' => 'Passwords must match and have minimum 8 characters']);

        $user = User::where('email', $request->email)->first();

        if (!$user || $user->remember_token != $request->token) return view('error');

        $user->update([
            'password' => Hash::make($request->password),
            'remember_token' => null
        ]);

        return view('success');
    }

    public function validateUserView(Request $request)
    {
        $users = User::where('validated', false)->where('role_id', 2)->get();
        return view('vendor.voyager.validate.browse', compact("users"));
    }

    public function validateUser(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user)
            return redirect()->back();

        $user->update([
            "validated" => true
        ]);

        return redirect()->back();
    }


    public function updateDeviceToken(Request $request)
    {
        $user = auth()->user();

        User::where('device_token', $request->device_token)->whereNotIn('id', [$user->id])->update([
            'device_token' => null,
            'device_type'  => null
        ]);

        $update = $user->update($request->all());

        return $update ? ok(true) : ko(__('custom_messages.cannot_update'));
    }

    public function test(Request $request)
    {
        // return ko("Disabled Endpoint :(");

        //Seleccionamos el usuario que ha realizado la peticion
        $user =User::find(5);

        return General::sendPush($user, "title", "text");

        //Seleccionamos su reserva en caso de tener
        $book = $user->books()->first();

        //Asignaciond de variables
        $lat = $request->lat;
        $lng = $request->lng;

        $topRightLat = $request->topRightLat;
        $topRightLng = $request->topRightLng;
        $bottomLeftLat = $request->bottomLeftLat;
        $bottomLeftLng = $request->bottonLeftLng;

        $lastMaxDistance = $request->last_max_distance ?? 0;

        //calcula la distancia entre las coordenadas
        $maxDistance = General::calculateDistance($topRightLat, $topRightLng, $bottomLeftLat, $bottomLeftLng);

        //calcula la distancia entre el usuario y los coches
        $vehicles = Vehicle::selectRaw("* ,
         ( 6371 * acos( cos( radians(?) ) *
           cos( radians( lat ) )
           * cos( radians( lng ) - radians(?)
           ) + sin( radians(?) ) *
           sin( radians( lat ) ) )
         ) AS distance", [$lat, $lng, $lat])
         //where los coches esten activos
            ->Available()
            //orwhere tenga una reserva
            ->orWhereIn('id', [$book ? $book->vehicle_id : null])
            //entre la distancia del ultimo coche y la distancia en diagonal
            ->having("distance", "<", $maxDistance)
            ->having("distance", ">", $lastMaxDistance)
            //orderby distancia
            ->Nearest()
            ->get();

            $request->merge(["max_distance"=>$maxDistance]);

        //devolvemos los vehiculos
        return ok(GetVehiclesAvailableResource::collection($vehicles));


























        $user = User::find(2);

        return General::sendPush($user,  [
            'title' => 'your title',
            'body' => 'your body',
        ]);

        // FICAT AIXO AL LOGIN DEL POSTMAN
        // try {
        //     var jsonData = JSON.parse(responseBody);
        //     if (jsonData.data) {
        //         postman.setEnvironmentVariable("carby_token", jsonData.data.access_token);
        //     }
        // } catch ($e) {
        // }
    }
}
