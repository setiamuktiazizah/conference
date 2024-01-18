<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Topic;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Storage;
use App\Http\Controllers\Auth;

class ConferenceController extends Controller
{
    public function index(Request $request)
    {
        $conferences = Conference::with('Topic', 'Schedule')->get();
        return view('admin.listofconference', ['conferences' => $conferences]);
    }

    public function create()
    {
        $topics = Topic::all();
        $schedules = Schedule::all();

        return view('admin.add-conference', compact('topics', 'schedules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic_id' => 'required',
            'schedule_id' => 'required',
            'name' => 'required',
            'venue' => 'required',
            'url_venue' => 'required|url',
            'type' => 'required',
            'total_reviewer' => 'required|numeric',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'timezone' => 'required',
            'url' => 'required|url',
        ]);

        $conference = new Conference();
        $conference->topic_id = $request->input('topic_id');
        $conference->schedule_id = $request->input('schedule_id');
        $conference->name = $request->input('name');
        $conference->venue = $request->input('venue');
        $conference->url_venue = $request->input('url_venue');
        $conference->type = $request->input('type');
        $conference->total_reviewer = $request->input('total_reviewer');
        $conference->timezone = $request->input('timezone');
        $conference->url = $request->input('url');

        $conference->created_by = 1;

        // Upload and store logo
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $conference->logo = $logoPath;
        }

        $conference->save();

        return redirect('/conference')->with('success', 'Conference added successfully');
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        $topics = Topic::all();
        $schedules = Schedule::all();

        return view('admin.edit-conference', compact('conference', 'topics', 'schedules'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'topic_id' => 'required',
            'schedule_id' => 'required',
            'name' => 'required',
            'venue' => 'required',
            'url_venue' => 'required|url',
            'type' => 'required',
            'total_reviewer' => 'required|numeric',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'timezone' => 'required',
            'url' => 'required|url',
        ]);

        $conference = Conference::findOrFail($id);

        $conference->update([
            'topic_id' => $request->input('topic_id'),
            'schedule_id' => $request->input('schedule_id'),
            'name' => $request->input('name'),
            'venue' => $request->input('venue'),
            'url_venue' => $request->input('url_venue'),
            'type' => $request->input('type'),
            'total_reviewer' => $request->input('total_reviewer'),
            'timezone' => $request->input('timezone'),
            'url' => $request->input('url'),
        ]);

        // Update logo if a new one is provided
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            Storage::delete($conference->logo);
            $conference->update(['logo' => $logoPath]);
        }

        return redirect('/conference')->with('success', 'Conference updated successfully');
    }

    public function destroy($id)
    {
        $item = Conference::findOrFail($id);
        $item->delete();

        return redirect('/conference');
    }
}
