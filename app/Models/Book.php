<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    const PAGINATION = 20;

    //PAGINATION
    protected $perPage = self::PAGINATION;

    protected $table = 'books';

    protected $fillable = [
        'user_id', 'vehicle_id', 'ends_at'
    ];

    protected $hidden = [];

    protected $casts = [];

    protected $appends = [];

    const BOOK_MINUTES = 10;

    // RELATIONSHIPS 🔀

    /**
     * Get the user that owns the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the vehicle that owns the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
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
