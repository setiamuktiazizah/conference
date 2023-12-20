<?php

namespace App\Models;

use App\Models\RoleOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    public function RoleOwner(): HasMany
    {
        return $this->hasMany(RoleOwner::class);
    }
}
