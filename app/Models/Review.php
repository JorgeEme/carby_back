<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    const PAGINATION = 20;

    //PAGINATION
    protected $perPage = self::PAGINATION;

    protected $table = 'reviews';

    protected $fillable = [
        'user_id', 'rating', 'comment'
    ];

    protected $hidden = [];

    protected $casts = [];

    protected $appends = [];

    // RELATIONSHIPS 🔀

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // SCOPES 🔎


    // APPENDS 🔧


    // MUTATORS 🐍


    // FUNCTIONS 📲


    // RULES 📐

    public static $createRules = [
        'rating'  => ['required', 'integer', 'between:1,5'],
        'comment' => ['required', 'string', 'min:1', 'max:200'],
    ];

    public static $updateRules = [
        // 'email'     => ['required', 'string', 'email'],
    ];



}
