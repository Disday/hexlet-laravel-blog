<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleCategory;
use App\Article;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategories = ArticleCategory::paginate(10);
        return view('article_category.index', compact('articleCategories'));
    }

    public function show($id)
    {
        $category = ArticleCategory::findOrFail($id);
        return view('article_category.show', compact('category'));
    }

    public function create()
    {
        $category = new Article();
        return view('article_category.create', compact('category'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|max:100',
            'description' => 'required|min:20',
            'state' => 'in:published,draft'
        ]);
        $category = new ArticleCategory();
        $category->fill($data);
        $category->save();
        $request->session()->flash('message', 'Category created');
        return redirect()->route('article_categories.index');
    }
}
