<?php

namespace App\Models;

use App\General;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
    const PAGINATION = 20;

    //PAGINATION
    protected $perPage = self::PAGINATION;

    protected $table = 'vehicles';

    protected $fillable = [
        'vehicle_type_id', 'lat', 'lng', 'available'
    ];

    protected $hidden = [];

    protected $casts = [
        "available" => "boolean"
    ];

    protected $appends = ['is_booked', 'address'];

    protected $with = ['vehicle_type'];

    // RELATIONSHIPS 🔀

    /**
     * Get the vehicleType that owns the Vehicle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle_type(): BelongsTo
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id', 'id');
    }

    /**
     * Get all of the books for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'vehicle_id', 'id');
    }

    // SCOPES 🔎

    public function scopeAvailable($query)
    {
        return $query->where('available', true);
    }

    public function scopeNearest($query)
    {
        return $query->orderBy('distance', 'asc');
    }




    // APPENDS 🔧
    public function getIsBookedAttribute()
    {
        return $this->books()->count() > 0 ? true : false;
    }

    public function getMediaAttribute()
    {
        return VehicleTypeMedia::where('vehicle_type_id', $this->vehicle_type_id)->get();
    }

    public function getAddressAttribute()
    {
        return General::getAddress($this->lat, $this->lng);
    }

    // MUTATORS 🐍


    // FUNCTIONS 📲


    // RULES 📐

    public static $createRules = [
        // 'email'     => ['required', 'string', 'email'],
    ];

    public static $updateRules = [
        // 'email'     => ['required', 'string', 'email'],
    ];

    public static $getVehiclesRules = [
        'lat' => ['required', 'regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
        'lng' => ['required', 'regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/']
    ];
}
