<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Input;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function getData(Request $request){
      $data['userlogged'] = DB::table('users')->where('id', $request['user_id'])->get();


      if(count($data) > 0 )
      {
        return view('profile' , $data);

      }
      else{
        return view('profile');
      }
    }

    public function updateData(Request $request){
        if(isset($request->name))
        {
          DB::table('users')->where('id', $request['user_id'])->update(['name'=> $request->name]);
        }
        if(isset($request->email))
        {
          DB::table('users')->where('id', $request['user_id'])->update(['email'=> $request->email]);
        }
        if(isset($request['birth-date']))
        {
          DB::table('users')->where('id', $request['user_id'])->update(['birth-date'=> $request['birth-date']]);
        }
          if(isset($request->genre))
        {
          DB::table('users')->where('id', $request['user_id'])->update(['genre'=> $request->genre]);
        }
        if(isset($request->avatar))
        {
            $file = Input::file('avatar');
      //  $user->image = $request['image'];
            $file->move('imagenes', $file->getClientOriginalName());
        //$user->image->storeAs('public/images','filename.jpg');
            $request->avatar ='imagenes/'.$file->getClientOriginalName();

          DB::table('users')->where('id', $request['user_id'])->update(['avatar'=> 'imagenes/'.$file->getClientOriginalName()]);
        }
        //DB::table('users')->where('id', $request['user_id'])->update([]);
        //  ->update(['birth-date'=> $request['birth-date']])
        //  ->update(['genre'=> $request->genre])
        //  ->update(['avatar'=> $request->avatar]);
          return view('profile');


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
