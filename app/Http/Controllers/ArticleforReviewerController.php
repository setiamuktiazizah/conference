<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Reviewer;

class ArticleforReviewerController extends Controller
{
    public function GetAllArtcileforReviewer(Request $request, Reviewer $user)
    {
        $ReviewerID = $user->id;

        $reviewerName = DB::table('users')
                            ->join('reviewers', 'users.id', '=', 'reviewers.user_id')
                            ->select('users.name')
                            ->where('reviewers.id', '=', $ReviewerID)
                            ->value('name');

        $articles = DB::table('topics')
                        ->join('conferences', 'conferences.topic_id', '=', 'topics.id')
                        ->join('reviewers', 'reviewers.conference_id', '=', 'conferences.id')
                        ->join('review_articles', 'review_articles.reviewer_id', '=', 'reviewers.id')
                        ->join('articles', 'articles.review_article_id', '=', 'review_articles.id')
                        ->select('reviewers.id AS ID', 'reviewers.user_id AS IDReviewer', 'conferences.name AS ConferenceName', 'articles.title AS Tittle', 'topics.name AS Topic')
                        ->where('reviewers.id', '=', $ReviewerID)
                        ->get();

        return view('reviewer.articleforreviewer', compact('user', 'articles', 'reviewerName'));    
    }
}
