<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    //

    protected $table ='movies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
     'name','image','genre','actor','sinopsis','duration','rate',
   ];
}
