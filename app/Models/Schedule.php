<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function Conference(): HasOne
    {
        return $this->hasOne(Conference::class);
    }

    public function MasterActivity(): HasOne
    {
        return $this->hasOne(MasterActivity::class);
    }
}
