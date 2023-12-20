<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubmitPaperController extends Controller
{
    protected $conference;

    public function __construct(){
        $this->conference = new Conference();
    }
    
    public function index(Request $request)
    {
        
        // dd($data);
        if ($request->ajax()) {
            $data = Conference::select('*');
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

            $conferences = $this->conference->getConference()->get();
            $data = [
                'conferences' => $conferences
            ];


            return view('user.submitpaper',$data);
    }

    public function get_conference(){
        $data = $this->conference->getConference();
        // dd($data->get());

        return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('action', function ($row) {
                //     $actionBtn = '';
                //     return $actionBtn;
                // })
                // ->rawColumn(['action'])
                ->make(true);
    }
        
}