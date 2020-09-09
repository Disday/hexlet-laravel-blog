<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleCategory;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategories = ArticleCategory::paginate(10);
        return view('article_category.index', compact('articleCategories'));
    }
}
