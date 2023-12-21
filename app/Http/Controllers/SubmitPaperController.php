<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Topic;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

// use yajra\DataTables\Facades\DataTables;


class SubmitPaperController extends Controller
{
    //
    public function index(Request $request)
    {
        $conferences = Conference::with('Topic', 'Schedule')->get();
        return view('user.submitpaper', ['conferences' => $conferences]);
    }
}
