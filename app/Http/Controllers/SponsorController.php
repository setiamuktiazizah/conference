<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Models\Conference;
use App\Models\Sponsor;

 
class SponsorController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function index(Request $request)
    {
        $sponsors = DB::table('sponsors')
                    ->select('conferences.name AS name', 'sponsors.name AS sponsor')
                    ->join('conferences', 'sponsors.conference_id', '=', 'conferences.id')
                    ->get();

        return view('admin.listofsponsor', compact('sponsors'));
    }
}