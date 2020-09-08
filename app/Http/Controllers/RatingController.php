<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class RatingController extends Controller
{
    public function index()
    {
        $articles = Article::all()
            ->filter(fn ($article) => $article->isPublished())
            ->sortByDesc('likes_count');

        return view ('rating.index', ['articles' => $articles]);

    }
}
