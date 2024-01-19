<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Reviewer;
use App\Models\Article;
use App\Models\Broadcast;
use App\Models\Price;
use App\Models\Schedule;
use App\Models\Topic;
use App\Models\Review;
use App\Models\Sponsor;
use App\Models\PriceConference;
use App\Models\Payment;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Payments;

class Conference extends Model
{
    protected $table = "conferences";
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    use HasFactory;

    // public function Reviewer(): HasMany
    // {
    //     return $this->hasMany(Reviewer::class);
    // }

    public function getConference()
    {
        return DB::table('conferences', 't1')
            ->join('topics as t2', 't1.id_topic', '=', 't2.id')
            ->join('schedules as t3', 't1.id_schedule', '=', 't3.id')
            // ->select('t1.*', 't2.name as area', 't3.start_date as when', 't3.end_date as deadline')
            ->select('t1.name', 't1.venue', 't2.name as topic', 't3.start_date', 't3.end_date')
            ->groupBy('t1.id');
        // ->get();
    }

    public function Article(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function Broadcast(): BelongsToMany
    {
        return $this->belongsToMany(Broadcast::class);
    }

    public function Price(): BelongsTo
    {
        return $this->belongsTo(Price::class);
    }

    public function Review(): BelongsToMany
    {
        return $this->belongsToMany(Review::class);
    }

    public function Schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    public function Sponsor(): BelongsToMany
    {
        return $this->belongsToMany(Sponsor::class);
    }

    // public function Topic(): BelongsToMany
    // {
    //     return $this->belongsToMany(Topic::class);
    // }
    public function Topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }

    public function PriceConference(): HasMany
    {
        return $this->hasMany(PriceConference::class);
    }

    public function Payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
}
