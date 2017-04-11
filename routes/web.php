<?php

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
/*
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/feed', function () {
    return view('feed');
});*/
Route::get('/', function () {
    return view('feed');
});
Route::get('/summary', function () {
    return View::make('summaryMovies');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/summary', function () {
    return view('summaryMovies');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/review', function () {
    return view('review');
});

Route::get('review','MoviesController@index');

Route::get('/review-logan', function () {
    return view('review-logan');
});
Route::get('/review-bat', function () {
    return view('review-batman');
});
Route::get('pruebasMovies',function(){
  $movies = Movies::where('genre','accion')->get();
    dd(movies);
});
Route::get('/insertMovie', function () {
    return view('insertMovie');
});

Route::get('summary','SummaryMoviesController@getData');

Route::post('store','MoviesController@store');



Auth::routes();


Route::get('/home', function () {
    return view('summaryMovies');
});
//Route::get('/home', 'HomeController@index');
