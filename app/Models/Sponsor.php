<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Conference;

class Sponsor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'logo',
        'conference_id',
        'name',
        'created_by',
    ];

    public function Conference(): BelongsToMany
    {
        return $this->belongsToMany(Conference::class);
    }
}
