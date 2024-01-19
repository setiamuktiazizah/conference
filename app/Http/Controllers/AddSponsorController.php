<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Sponsor;
use App\Models\Conference;

class AddSponsorController extends Controller
{
    public function index()
    {
        $conferences = Conference::pluck('name', 'id');
        return view('adminseminar.addsponsors', compact('conferences'));
    }

    public function upload(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'conference_id' => 'required|exists:conferences,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Sponsor::create([
            'name' => $request->input('name'),
            'conference_id' => $request->input('conference_id'),
            'logo' => $imagePath,
            'created_by' => 1,
        ]);

        return redirect('/sponsors');
    }
}
