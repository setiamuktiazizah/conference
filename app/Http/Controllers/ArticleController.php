<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Conference;
use App\Models\Topic;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        return view('admin.article', ['articles' => $articles]);
    }
}
