<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Price;
use App\Models\User;
use App\Models\Conference;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Payment extends Model
{
    use HasFactory;

    public function Price(): BelongsTo
    {
        return $this->belongsTo(Price::class);
    }

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function Conference(): HasOne
    {
        return $this->hasOne(Conference::class);
    }
}
