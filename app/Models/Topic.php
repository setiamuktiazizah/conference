<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Conference;
use App\Models\Article;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Topic extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function Conference(): BelongsToMany
    // {
    //     return $this->belongsToMany(Conference::class);
    // }

    public function Article(): HasMany
    {
        return $this->hasMany(Article::class);
    }
    public function Conference(): HasMany
    {
        return $this->hasMany(Conference::class);
    }
}
