<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Conference;
use App\Models\Article;
use App\Models\Form;
use App\Models\User;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Conference(): HasMany
    {
        return $this->hasMany(Conference::class);
    }
    public function Article(): HasMany
    {
        return $this->hasMany(Article::class);
    }
    public function User(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function Form(): HasMany
    {
        return $this->hasMany(Form::class);
    }
}
