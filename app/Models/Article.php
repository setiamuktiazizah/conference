<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function AuthorConferenceFile(): HasOne
    {
        return $this->hasOne(AuthorConferenceFile::class);
    }

    public function ReviewArticle(): HasMany
    {
        return $this->hasMany(ReviewArticle::class);
    }
    
    public function Topic(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    public function Conference(): BelongsToMany
    {
        return $this->belongsToMany(Conference::class);
    }

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
