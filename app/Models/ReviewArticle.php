<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Article;
use App\Models\User;



class ReviewArticle extends Model
{
    use HasFactory;

    public function Article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
