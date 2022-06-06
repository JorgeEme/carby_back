<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VehicleType extends Model
{
    const PAGINATION = 20;
    const IMG_FOLDER = 'vehicles/';

    //PAGINATION
    protected $perPage = self::PAGINATION;

    protected $table = 'vehicle_types';

    protected $fillable = [
        'name', 'brand', 'model', 'price_by_minute', 'seats', 'doors', 'automony_km', 'horse_power', 'gear', 'air_conditioning', 'spare_wheel',
        'smart_screen', 'back_cam', 'parking_sensor', 'auto_emergency_braking'
    ];

    protected $hidden = [];

    protected $casts = [
        "air_conditioning"       => "boolean",
        "spare_wheel"            => "boolean",
        "smart_screen"           => "boolean",
        "back_cam"               => "boolean",
        "parking_sensor"         => "boolean",
        "auto_emergency_braking" => "boolean",
    ];

    protected $appends = [];

    protected $with = ['images'];

    // RELATIONSHIPS 🔀

    /**
     * Get all of the images for the VehicleType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(VehicleTypeMedia::class, 'vehicle_type_id', 'id');
    }

    // SCOPES 🔎


    // APPENDS 🔧


    // MUTATORS 🐍


    // FUNCTIONS 📲


    // RULES 📐

    public static $createRules = [
        // 'email'     => ['required', 'string', 'email'],
    ];

    public static $updateRules = [
        // 'email'     => ['required', 'string', 'email'],
    ];
}
