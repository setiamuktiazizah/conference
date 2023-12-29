<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Guestlistcontroller extends Controller
{
    public function GetAllUser(Request $request)
    {
        $user = User::get();
        return view('admin.guestlist', compact('user'));    
    }
    public function DeleteUser(User $user)
    {
        User::where('id', $user->id)->delete();

         return redirect()->route('admin.guestlist.list')->with('status', 'Berhasil Dihapus!');   
    }
}
