<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Conference;
use App\Models\Schedule;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RegisterConferenceController extends Controller
{
    //
    public function index()
    {
        $topics = Topic::all();
        return view('partner.registerconference', compact('topics'));
    }

    public function store(Request $request)
    {

        // Validate and store the new conference, topics, and schedule
        // $request->validate([
        //     // Add validation rules for your fields
        //     'name' => 'required|string',
        //     'topic' => 'required|exists:topics,id',
        //     'start_date' => 'required|date',
        //     'end_date' => 'required|date|after:start_date',
        //     'venue' => 'required|string',
        //     'url_venue' => 'required|string',
        //     'type' => 'required|string',
        //     'total_reviewer' => 'required',
        // ]);

        // Create conference
        // $topic = Topic::find($request->input('topic'));

        $conference = Conference::create([
            'name' => $request->input('name'),
            'topic_id' => $request->input('topic_id'),
            'schedule_id' => 1,
            'venue' => $request->input('venue'),
            'url_venue' => $request->input('url_venue'),
            'type' => $request->input('type'),
            'total_reviewer' => $request->input('total_reviewer'),
            'url' => $request->input('url'),
            'logo' => 'http',
            'timezone' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // // Simpan hubungan dengan topik
        // $topic = Topic::find($request->input('topic'));
        // $conference->Topic()->associate($topic);

        // Simpan konferensi
        // $conference->save();

        // Create schedule
        $schedule = Schedule::create([
            'master_activity_id' => 1, // Replace with the actual master activity ID
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Associate schedule with the conference
        $conference->schedule()->associate($schedule);
        $conference->save();

        // Redirect to the next step or a different page
        return redirect('/');
    }

    public function confhistory(Request $request, User $user)
    {
        $userid = $user->id;

        $conferences = DB::table('conferences')
            ->join('payments', 'payments.conference_id', '=', 'conferences.id')
            ->select('conferences.id as id', 'conferences.name as name', 'conferences.created_at as created_date', 'conferences.logo as logo', 'payments.status as status')
            ->where('conferences.created_by', '=', $userid)
            ->get();

        return view('partner.conferencehistory', compact('conferences'));
    }
}
