<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Guestlistcontroller extends Controller
{
    public function GetAllUser(Request $request)
    {
        $user = User::get();
        return view('admin.GuestList', compact('user'));    }
}
