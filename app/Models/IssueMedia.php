<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class IssueMedia extends Model
{
        const PAGINATION = 20;

        //PAGINATION
        protected $perPage = self::PAGINATION;

        protected $table = 'issue_media';

        protected $fillable = [
            'issue_id', 'media'
        ];

        protected $hidden = [];

        protected $casts = [];

        protected $appends = ['media_url'];

        // RELATIONSHIPS 🔀


        // SCOPES 🔎


        // APPENDS 🔧
        public function getMediaUrlAttribute()
        {
            return URL::asset('storage/' . $this->media);
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
