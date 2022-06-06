<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    protected $table = 'oauth_access_tokens';

    protected $fillable = ['revoked'];

    public function scopeRevoked($query)
    {
        return $query->where('revoked', true);
    }

    public function scopeUnrevoked($query)
    {
        return $query->where('revoked', false);
    }
}
