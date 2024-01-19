<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use App\Models\Article;
use Yajra\DataTables\Facades\DataTables;

class PaperInfoController extends Controller
{
    //
    public function index(Request $request)
    {
        $articles = Article::with('Conference')->get();
        return view('user.paperinfo', ['articles' => $articles]);
    }
}
