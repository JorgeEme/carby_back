<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleTypeMedia extends Model
{
    const PAGINATION = 20;

    //PAGINATION
    protected $perPage = self::PAGINATION;

    protected $table = 'vehicle_type_media';

    protected $fillable = [
        'vehicle_type_id', 'media'
    ];

    protected $hidden = [];

    protected $casts = [];

    protected $appends = ['full_path'];

    // RELATIONSHIPS 🔀


    // SCOPES 🔎


    // APPENDS 🔧

    public function getFullPathAttribute()
    {
        return url('storage/' . $this->media);
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
}
