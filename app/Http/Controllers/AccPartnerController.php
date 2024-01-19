<?php

namespace App\Http\Controllers;
use App\Models\Conference;
use Illuminate\Http\Request;

class AccPartnerController extends Controller
{
    public function index(Request $request)
    {
        $conferences = Conference::with('Topic', 'Schedule')->get();
        return view('admin.accpartner', ['conferences' => $conferences]);
    }
}
