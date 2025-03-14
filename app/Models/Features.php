<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Features extends Model
{
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }

    
    public function upvotes() {
        return $this->hasMany(Upvote::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
