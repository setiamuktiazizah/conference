<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubmitPaperController extends Controller
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
        return view('user.submitpaper');
    }
}
