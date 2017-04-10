<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use Illuminate\Support\Facades\Input;
class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('insertMovie');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Movies::create([
            'name' => $data['name'],
            'image' => $data['image'],
            'genre' => $data['genre'],
            'actor' => $data['actor'],
            'sinopsis' => $data['sinopsis'],
            'duration' => $data['duration'],

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new movies;


        $user->name = $request['name'];

      if(isset($request->image))
      {
        $file = Input::file('image');
      //  $user->image = $request['image'];
        $file->move('imagenes', $file->getClientOriginalName());
        //$user->image->storeAs('public/images','filename.jpg');
        $user->image = $file->getClientOriginalName();
      }
      $user->genre = $request['genre'];
      $user->actor = $request['actor'];
      $user->sinopsis = $request['sinopsis'];
      $user->duration = $request['duration'];

        $user->save();
        return 'data saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = file::all();
        return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
