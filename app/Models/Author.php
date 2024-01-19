<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\User;
use App\Models\Article;

class Author extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function Article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
