<?php

namespace App\Http\Controllers;

use App\Models\PriceConference;
use Illuminate\Http\Request;

class PartnerConferenceController extends Controller
{
    //
    public function packet()
    {
        $packets = PriceConference::all();
        return view('partner.bundling', compact('packets'));
    }
}
