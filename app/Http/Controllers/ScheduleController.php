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
        if ($request->ajax()) {
            $data = Conference::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('action', function ($row) {
                //     $actionBtn = '';
                //     return $actionBtn;
                // })
                // ->rawColumn(['action'])
                ->make(true);
        }
        return view('user.schedule');
    }
}
