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
    public function GetDataUser(Request $request, User $user)
    {
        $users = User::where('id', $user->id)->get();
        return view('admin.userprofileadmin', compact('users'));    
    }
    public function DeleteUser(User $user)
    {
        User::where('id', $user->id)->delete();

         return redirect()->route('admin.guestlist.list')->with('status', 'Berhasil Dihapus!');   
    }
    public function EditUser(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'institution' => 'required',
        ]);
        
        
        $user->name = $request['name'];
        $user->first_name =  $request['first_name'];
        $user->last_name =  $request['last_name'];
        $user->institution =  $request['institution'];


        $user->save();
        
        return redirect()->route('admin.guestlist.list')->with('status', 'Data Berhasil Diperbarui!');   
    }
}
