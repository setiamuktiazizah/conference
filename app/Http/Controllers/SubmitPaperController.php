<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Topic;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


// use yajra\DataTables\Facades\DataTables;


class SubmitPaperController extends Controller
{
    //
    public function index(Request $request)
    {
        $conferences = Conference::with('Topic', 'Schedule')->get();
        return view('user.submitpaper', ['conferences' => $conferences]);
    }

    public function paperview(Request $request, Conference $Confid)
    {
        $id = $Confid -> id;
        $conferences = DB::table('conferences')
                            ->where('id', '=', $id)
                            ->first();

        $authors = User::all(); 

        return view('user.submitregisterpaper', compact('conferences', 'authors'));
    }
    
    public function addauthorview(Request $request, Conference $Confid)
    {
        $id = $Confid -> id;
        $conferences = DB::table('conferences')
                            ->where('id', '=', $id)
                            ->first();

        $authors = User::all(); 

        return view('user.submitaddauthor', compact('conferences', 'authors'));
    }
    
    public function uploadview(Request $request, Conference $Confid)
    {
        $id = $Confid -> id;
        $conferences = DB::table('conferences')
                            ->where('id', '=', $id)
                            ->first();

        $authors = User::all(); 

        return view('user.submituploadreviewmanuscript', compact('conferences', 'authors'));
    }

    public function submitpaper(Request $request, Conference $Confid)
    {
        $request->validate([
            'title' => 'required|string',
            'abstract' => 'required|string',
            'file' => 'required|mimes:pdf',
        ]);

        $article = new Article();
        $article->user_id = Auth::id();
        $article->conference_id = $Confid->id;
        $article->topic_id = $Confid->topic_id;
        $article->title = $request->title;
        $article->abstract = $request->abstract;
        // You may want to handle file uploads properly; below is just a placeholder
        $article->file = $request->file('file')->store('files', 'public');

        $article->save();


       



        // Insert the array into the database
        // Article::create($data);

        // Redirect or return a response as needed
        // return redirect()->route('home')->with('success', 'Paper submitted successfully!');
    }

}
