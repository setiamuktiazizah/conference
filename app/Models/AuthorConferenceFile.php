<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorConferenceFile extends Model
{
    use HasFactory;

    public function Article(): HasOne
    {
        return $this->hasOne(Article::class);
    }

    public function ConferenceFileType(): HasOne
    {
        return $this->hasOne(ConferenceFileType::class);
    }
}
