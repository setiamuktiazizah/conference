<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\AuthorConferenceFile;
use App\Models\ReviewArticle;
use App\Models\Topic;
use App\Models\Conference;
use App\Models\User;
use App\Models\ArticleHistory;
use App\Models\Author;
use App\Models\Review;

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

    public function Topic(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class);
    }

    public function Conference(): BelongsTo
    {
        return $this->belongsTo(Conference::class);
    }

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function ArticleHistory(): HasMany
    {
        return $this->hasMany(ArticleHistory::class);
    }

    public function Author(): HasMany
    {
        return $this->hasMany(Author::class);
    }

    public function Review(): BelongsToMany
    {
        return $this->belongsToMany(Review::class);
    }
}
