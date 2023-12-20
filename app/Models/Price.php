<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Conference;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    use HasFactory;

    public function Conference(): HasOne
    {
        return $this->hasOne(Conference::class);
    }

    public function Payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }
}
