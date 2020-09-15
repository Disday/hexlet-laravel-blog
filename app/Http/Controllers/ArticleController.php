<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query) {
            // print_r($query);
            $articles = Article::where('name', 'like', "%{$query}%")->paginate(2);
        } else {
            $articles = Article::paginate(3);
        }
        return view('article.index', compact('articles', 'query'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:10'
        ]);
        $article = new Article();
        $article->fill($data);
        $article->save();
        $request->session()->flash('message', 'Article created');
        return redirect()->route('article.index');
    }
}
