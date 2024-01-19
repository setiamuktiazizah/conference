<?php

namespace App\Models;

use App\Models\Conference;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PriceConference extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Conference(): BelongsTo
    {
        return $this->belongsTo(Conference::class);
    }
}
