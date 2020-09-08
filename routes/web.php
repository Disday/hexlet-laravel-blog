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

Route::get('/about', 'PageController@about');
Route::get('/rating', 'RatingController@index');

Route::get('/articles', function () {
    $articles = App\Article::all();
    return view('page.articles', ['articles' => $articles]);
});
