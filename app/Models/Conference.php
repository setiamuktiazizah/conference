<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Conference extends Model
{
    protected $table="conferences";
    protected $primaryKey = 'id';
    
    use HasFactory;

    // public function Reviewer(): HasMany
    // {
    //     return $this->hasMany(Reviewer::class);
    // }

    public function getConference(){
        return DB::table('conferences','t1')
        ->join('topics as t2', 't1.id_topic', '=', 't2.id')
        ->join('schedules as t3', 't1.id_schedule', '=', 't3.id')
        // ->select('t1.*', 't2.name as area', 't3.start_date as when', 't3.end_date as deadline')
        ->select('t1.name','t1.venue','t2.name as topic','t3.start_date','t3.end_date')
        ->groupBy('t1.id');
        // ->get();
    }
}
