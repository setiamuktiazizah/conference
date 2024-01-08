<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Conference;
use App\Models\User;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reviewer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Conference(): BelongsToMany
    {
        return $this->belongsToMany(Conference::class);
    }

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
