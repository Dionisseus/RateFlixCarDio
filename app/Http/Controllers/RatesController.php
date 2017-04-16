<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatesController extends Controller
{
    //
    return Rates::create([
        'id' => $data['id'],
        'idUser' => $data['idUser'],
        'idMovie' => $data['idMovie'],
        'thumbsUp' => $data['thumbsUp']),
    ]);
}
