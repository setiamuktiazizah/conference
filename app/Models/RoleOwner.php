<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Role;
use App\Models\User;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RoleOwner extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'role_id',
        'created_by',
    ];


    public function User(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function Role(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}
