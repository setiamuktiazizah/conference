<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\RegisterConference;
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
            $data = $this->conference->getConference();

            // $data = Conference::select('');
            return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('action', function ($row) {
                //     $actionBtn = '';
                //     return $actionBtn;
                // })
                // ->rawColumn(['action'])
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