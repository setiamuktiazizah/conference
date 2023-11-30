<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function Article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
