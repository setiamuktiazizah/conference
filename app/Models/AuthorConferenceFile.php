<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\ConferenceFileType;
use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuthorConferenceFile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Article(): HasOne
    {
        return $this->hasOne(Article::class);
    }

    public function ConferenceFileType(): BelongsTo
    {
        return $this->belongsTo(ConferenceFileType::class);
    }
}
