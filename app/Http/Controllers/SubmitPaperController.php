<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

// use yajra\DataTables\Facades\DataTables;


class SubmitPaperController extends Controller
{
    protected $conference;

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
