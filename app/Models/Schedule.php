<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Conference;
use App\Models\MasterActivity;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Conference(): HasOne
    {
        return $this->hasOne(Conference::class);
    }

    public function MasterActivity(): HasOne
    {
        return $this->hasOne(MasterActivity::class);
    }
}
