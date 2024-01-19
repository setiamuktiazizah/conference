<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Conference;
use App\Models\User;

class Broadcast extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Conference(): HasMany
    {
        return $this->hasMany(Conference::class);
    }

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
