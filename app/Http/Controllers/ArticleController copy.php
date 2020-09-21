<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\StoreArticle;

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


    public function store(StoreArticle $request)
    {
        // $data = $this->validate($request, [
        //     'name' => 'required|unique:articles'
        //     ]);
        $data = $request->validated();
        $article = new Article();
        $article->fill($data);
        print_r($data);
        $article->save();
        $request->session()->flash('message', 'Article created');
        return redirect()->route('article.index');
    }
    
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }
    
    public function update(StoreArticle $request, $id)
    {
        $article = Article::findOrFail($id);
        // $data = $this->validate($request, [
            //     'name' => 'required|unique:articles,name,' . $article->id
            //     // 'body' => 'required|min:10'
            // ]);
            $data = $request->validated();
            // var_dump($data);
            $article->fill($data);
            $article->save();
            $request->session()->flash('message', 'Article updated');
            return redirect()->route('article.index');
        }
        
        public function destroy(Request $request, $id)
        {
            $article = Article::findOrFail($id);
            $article->delete();
            $request->session()->flash('message', 'Article deleted');
            return redirect()->route('article.index');
        }
    }
    