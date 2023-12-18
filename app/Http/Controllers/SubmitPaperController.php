<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Topic;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubmitPaperController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Conference::with('topics', 'schedules')->select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('action', function ($row) {
                //     $actionBtn = '';
                //     return $actionBtn;
                // })
                // ->rawColumn(['action'])
                ->addIndexColumn()
                ->addColumn('topic_names', function ($conference) {
                    return $conference->topics->pluck('name')->implode(', ');
                })
                ->addColumn('start_date', function ($conference) {
                    // Ambil data dari relasi schedules
                    return $conference->schedules->pluck('start_date')->implode(', ');
                })
                // Tambahkan kolom lain sesuai kebutuhan
                ->make(true);
        }
        return view('user.submitpaper');
    }
}
