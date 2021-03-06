<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use App\Rates;
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

     //$this->getData();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Movies::create([
            'name' => $data['name'],
            'image' => $data['image'],
            'genre' => $data['genre'],
            'actor' => $data['actor'],
            'sinopsis' => $data['sinopsis'],
            'duration' => $data['duration'],

            ]);
    }

    public function getData(Request $request)
    {
      $data['data'] = DB::table('movies')->where('id', $request['title_id'])->get();
      $data['dataRate'] = DB::table('rates')->where('idMovie', $request['title_id'])->get();
      $data['dataRelated'] = DB::table('movies')->where('genre', $request['genre_val'])->take(2)->get();
      $dataRelated =$data['dataRate'];
      $likes =0;
      foreach ($dataRelated as $p) {
        if($p->thumbsUp ===1){
           $likes++;
       }
   }    
   if(sizeof($dataRelated)>0){
      $likes = floor(($likes/sizeof($dataRelated) )*100);
  }


  if(count($data) > 0 )
  {
    return view('review',$data)->with('likes',$likes);
       // return view('review', $data,$dataRate);

}
else{
    return view('review');
}
}


public function getMyReviews(Request $request)
{
  $data['dataRate'] = DB::table('rates')->where('idUser', $request['user_id'])->get();
  if(count($data) > 0 )
  {
    return view('myreviews',$data);
}
else{
    return view('myreviews');
}
}

public function deleteReview(Request $request)
{
    
    DB::table('rates')->where('idRate', $request['idRate'])->delete();
  $data['dataRate'] = DB::table('rates')->where('idUser', $request['user_id'])->get();
  if(count($data) > 0 )
  {
    return view('myreviews',$data);
}
else{
    return view('myreviews');
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
        return redirect('summary');
    }

    public function getDataRate(Request $request)
    {
        $review = new rates;
        $review->idUser = $request['idUser'];
        $review->idMovie = $request['idMovie'];
        $review->thumbsUp = $request['thumbsUp'];
        $review->review = $request['reviewText'];

        $review->save();
        return redirect('summary');
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
