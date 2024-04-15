<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    public function user() : BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function comments() : HasMany
    {
        return $this->hasMany(\App\Models\Comment::class);
    }

    public function likes() : HasMany
    {
        return $this->hasMany(\App\Models\Like::class);
    }
}
