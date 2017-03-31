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
Route::get('/viewTest', function () {
    return View::make('viewTest');
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
Route::get('/review-logan', function () {
    return view('review-logan');
});
Route::get('pruebasMovies',function(){
  $movies = Movies::where('genre','accion')->get();
    dd(movies);
});

Auth::routes();


Route::get('/home', function () {
    return view('summaryMovies');
});
//Route::get('/home', 'HomeController@index');
