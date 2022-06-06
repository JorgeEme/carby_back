<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Issue extends Model
{
    const PAGINATION = 20;
    const IMG_FOLDER = 'issues/';

    //PAGINATION
    protected $perPage = self::PAGINATION;

    protected $table = 'issues';

    protected $fillable = [
        'journey_id', 'description', 'subject'
    ];

    protected $hidden = [];

    protected $casts = [];

    protected $appends = ['images'];

    // RELATIONSHIPS 🔀
    /**
     * Get all of the Images for the Issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Images(): HasMany
    {
        return $this->hasMany(IssueMedia::class, 'issue_id', 'id');
    }

    /**
     * Get the user that owns the Issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function journey()
    {
        return $this->belongsTo(Journey::class, 'journey_id', 'id');
    }

    // SCOPES 🔎


    // APPENDS 🔧


    // MUTATORS 🐍


    // FUNCTIONS 📲


    // RULES 📐

    public static $createRules = [
        "journey_id"  => ['required', 'integer'],
        "subject"     => ['required', 'string', 'max:200'],
        "description" => ['required', 'string', 'max:200'],
    ];

    public static $updateRules = [
        // 'email'     => ['required', 'string', 'email'],
    ];
}
