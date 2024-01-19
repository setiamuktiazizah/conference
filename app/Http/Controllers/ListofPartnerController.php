<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ListofPartnerController extends Controller
{
    public function GetAllPartner(Request $request)
    {
        $users = DB::table('users')->whereNotNull('nib')->get();
        return view('admin.accpartner', compact('users'));
    }

    public function updatePartnerStatus(Request $request, $userId)
    {
        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);

        $user = User::findOrFail($userId);
        $user->update([
            'is_partner' => $request->input('status') === 'accepted' ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Status updated successfully');
    }
}
