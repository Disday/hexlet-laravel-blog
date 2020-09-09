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

Route::get('/article_categories', 'ArticleCategoryController@index')
    ->name('article_categories.index');
