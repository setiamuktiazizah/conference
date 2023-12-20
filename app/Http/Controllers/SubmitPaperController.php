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
        // if(\request()->ajax()){
        //     $data = Conference::latest()->get();
        //     return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($row){
        //             $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        // return view('user.submitpaper');
        // if ($request->ajax()) {
        //     try {
        //         $data = Conference::with('Topic', 'Schedule')->select('*');
        //         return DataTables::of($data)
        //             ->addIndexColumn()
        //             ->addColumn('topic_names', function ($conference) {
        //                 return $conference->topics->pluck('name')->implode(', ');
        //             })
        //             ->addColumn('start_date', function ($conference) {
        //                 // Ambil data dari relasi schedules
        //                 return $conference->schedules->pluck('start_date')->implode(', ');
        //             })
        //             // Tambahkan kolom lain sesuai kebutuhan
        //             ->make(true);
        //     } catch (\Exception $e) {
        //         return response()->json(['error' => $e->getMessage()]);
        //     }
        // }
        $conferences = Conference::with(['Topic', 'Schedule'])->get();
        // return dd($conferences);
        return view('user.submitpaper', ['conferences' => $conferences]);
    }
}
