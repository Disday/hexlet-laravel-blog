<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page.welcome');
});

Route::get('/about', 'PageController@about')
    ->name('about');

Route::get('/rating', 'RatingController@index')
    ->name('rating.index');

Route::get('/articles', 'ArticleController@index')
    ->name('article.index');

Route::get('/article/create', 'ArticleController@create')
    ->name('article.create');

Route::post('/article/store', 'ArticleController@store')
    ->name('article.store');

Route::get('/article/{id}', 'ArticleController@show')
    ->name('articles.show');

Route::get('/article_categories', 'ArticleCategoryController@index')
    ->name('article_categories.index');

Route::post('/article_categories/store', 'ArticleCategoryController@store')
    ->name('article_categories.store');

Route::get('/article_categories/create', 'ArticleCategoryController@create')
    ->name('article_categories.create');

Route::get('/article_categories/{id}', 'ArticleCategoryController@show')
    ->name('article_categories.show');
