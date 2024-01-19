<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use Yajra\DataTables\Facades\DataTables;

class ScheduleController extends Controller
{
    //
    public function index(Request $request)
    {
        $conferences = Conference::with('Schedule')->get();
        return view('user.schedule', ['conferences' => $conferences]);
    }
}
