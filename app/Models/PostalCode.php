<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    const PAGINATION = 20;

    //PAGINATION
    protected $perPage = self::PAGINATION;

    protected $table = 'postal_codes';

    protected $fillable = [
        'postal_code'
    ];

    protected $hidden = [];

    protected $casts = [];

    protected $appends = [];

    // RELATIONSHIPS 🔀


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
