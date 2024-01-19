<?php

namespace App\Models;

use App\Models\Schedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MasterActivity extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }
}
