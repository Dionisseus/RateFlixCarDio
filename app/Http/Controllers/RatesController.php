<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatesController extends Controller
{
    
    public function create()
    {
        //
      return Rates::create([
		'idRate' => $data['idRate'],
		'idUser' => $data['idUser'],
		'idMovie' => $data['idMovie'],
		'thumbsUp' => $data['thumbsUp'],
		'review' => $data['review'],
	]);
    }


public function getData(){
	$data['data'] = DB::table('rates')->where('idMovie', $request['title_id'])->take(30)->get();
	if(count($data) > 0 ){
		return view('review' , $data);
	}else{
		return view('review');
	}
}

public function store(Request $request)
{
	$review = new review;
	$review->idUser = $request['idUser'];
	$review->idMovie = $request['idMovie'];
	$review->thumbsUp = $request['thumbsUp'];
	$review->review = $request['review'];

	$review->save();
	return redirect('reviews');
}
}
