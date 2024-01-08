<?php

namespace App\Models;

use App\Models\Review;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Form extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Review(): BelongsToMany
    {
        return $this->belongsToMany(Review::class);
    }
}
