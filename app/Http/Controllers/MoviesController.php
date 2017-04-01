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
            'image' => $data['image'],
            'genre' => $data['genre']),
            'actor' => $data['actor'],
            'sinopsis' => $data['sinopsis'],
            'duration' => $data['duration'],
            'rate' => $data['rate'],
        ]);
    }
}
