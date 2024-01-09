<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Topic;
use App\Models\Schedule;
use App\Models\PriceConference;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;

class PartnerConferenceController extends Controller
{
    //
    public function packet()
    {
        $packets = PriceConference::all();
        return view('partner.bundling', compact('packets'));
        // //
        // public function packet(){
        //     $packet = PriceConference::
    }

    public function partner($id)
    {
        $user = User::where('id', $id)->first();

        if ($user->is_partner == 1) {
            return redirect()->route('listConference', ['id' => $user->id]);
        } elseif ($user->is_partner == 0) {
            return view('partner.waitingRoom');
        } else {
            return redirect('/default')->with('error', 'Status partner tidak valid');
        }
    }

    public function listConference($id)
    {
        $conferences = Conference::where('created_by', $id)->with('Topic', 'Payment', 'Schedule')->get();
        return view('partner.listConference', ['conferences' => $conferences]);
    }

    public function bundling($id)
    {
        // Lakukan sesuatu dengan $id (ID konferensi)
        return view('partner.bundlingChoose', ['id' => $id]);
    }
}
