<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use Illuminate\Support\Facades\Input;
use DB;
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
      //  $users = DB::table('movies')->first();
      //  return View::('insertMovie',['movies'=>$users->sinopsis]);

     $this->getData($_GET['id']);
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

    public function getData($id)
    {
      $data['data'] = DB::table('movies')->where('id',$id);

      if(count($data) > 0 )
      {
        return view('review', $data);

      }
      else{
        return view('review');
      }
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
        $user->image ='imagenes/'.$file->getClientOriginalName();
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
    public function show()
    {
        //
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
