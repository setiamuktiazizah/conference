<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ListofPartnerController extends Controller
{
    public function GetAllPartner(Request $request)
    {
        $users = DB::table('users')->where('is_partner', '1')->get();
        return view('admin.accpartner', compact('users'));    
    }
}
