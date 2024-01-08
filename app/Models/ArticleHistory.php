<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Article;

class ArticleHistory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
