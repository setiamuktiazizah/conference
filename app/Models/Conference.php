<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Reviewer;
use App\Models\Article;
use App\Models\Broadcast;
use App\Models\Price;
use App\Models\Schedule;
use App\Models\Topic;
use App\Models\Review;
use App\Models\Sponsor;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Conference extends Model
{
    use HasFactory;

    public function Reviewer(): HasMany
    {
        return $this->hasMany(Reviewer::class);
    }

    public function Article(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function Broadcast(): BelongsToMany
    {
        return $this->belongsToMany(Broadcast::class);
    }

    public function Price(): BelongsTo
    {
        return $this->belongsTo(Price::class);
    }

    public function Review(): BelongsToMany
    {
        return $this->belongsToMany(Review::class);
    }

    public function Schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    public function Sponsor(): HasMany
    {
        return $this->hasMany(Sponsor::class);
    }

    // public function Topic(): BelongsToMany
    // {
    //     return $this->belongsToMany(Topic::class);
    // }
    public function Topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
