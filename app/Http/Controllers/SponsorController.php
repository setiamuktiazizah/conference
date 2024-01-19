<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Sponsor;
use App\Models\Conference;

class SponsorController extends Controller
{
    public function index(Request $request)
    {
        $sponsors = DB::table('sponsors')
            ->join('conferences', 'sponsors.conference_id', '=', 'conferences.id')
            ->select('sponsors.*', 'conferences.name as conference_name')
            ->get();

        $sponsors = Sponsor::hydrate($sponsors->toArray());

        return view('adminseminar.sponsors', ['sponsors' => $sponsors]);
    }

    public function edit($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $conferences = Conference::all(); // Assuming you have a Conference model

        return view('adminseminar.edit-sponsor', compact('sponsor', 'conferences'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'conference_id' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $sponsor = Sponsor::findOrFail($id);

        // Update the sponsor data
        $sponsor->update([
            'name' => $request->input('name'),
            'conference_id' => $request->input('conference_id'),
        ]);

        // Update logo if a new one is provided
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            Storage::delete($sponsor->logo);
            $sponsor->update(['logo' => $logoPath]);
        }

        return redirect('/sponsors')->with('success', 'Sponsor updated successfully');
    }

    public function destroy($id)
    {
        $item = Sponsor::findOrFail($id);
        Storage::delete($item->logo);
        $item->delete();

        return redirect('/sponsors');
    }
}
