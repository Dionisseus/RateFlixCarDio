<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Movies
     */
    protected function create(array $data)
    {
        return Movies::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'birth-date' => $data['birth-date'],
            'genre' => $data['genre'],
            'avatar' => $data['avatar'],
        ]);
    }
}
