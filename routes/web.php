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
Route::get('/register', function () {
    return view('register');
});
Route::get('/summary', function () {
    return view('summaryMovies');
});
Route::get('summary','SummaryMoviesController@getData');
Route::post('reviews', 'MoviesController@getData');
Route::post('reviewsRate', 'MoviesController@getDataRate');
Route::get('/profile', function () {
    return view('profile');
});
Route::post('/review', function () {
    return view('review');
});
Route::post('review','MoviesController@index');
Route::post('review','MoviesController@getData');
Route::post('myreviews','MoviesController@getMyReviews');
Route::post('deleteReview','MoviesController@deleteReview');
Route::get('pruebasMovies',function(){
  $movies = Movies::where('genre','accion')->get();
    dd(movies);
});
Route::get('/insertMovie', function () {
    return view('insertMovie');
});
Route::post('store','MoviesController@store');
Auth::routes();
Route::get('/home', function () {
    return view('summaryMovies');
});
//Route::get('/home', 'HomeController@index');
