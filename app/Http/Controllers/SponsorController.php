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

    public function destroy($id)
    {
        $item = Sponsor::findOrFail($id);
        Storage::delete($item->logo);
        $item->delete();

        return redirect('/sponsors');
    }
}
