<?php

namespace App\Http\Controllers;
use App\Movies;
use Illuminate\Http\Request;
use DB;
class AutoCompleteController extends Controller {
    
    public function index(){
        return view('autocomplete.index');
   }

    public function autoComplete(Request $request) {
        $query = $request->get('term','');
        
        $movies = DB::table('movies')->where('name','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($movies as $movie) {
                $data[]=array('value'=>$movie->name,'id'=>$movie->id);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
    
}