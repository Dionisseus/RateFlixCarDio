<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatesController extends Controller
{
    //
    return Rates::create([
        'idRate' => $data['idRate'],
        'idUser' => $data['idUser'],
        'idMovie' => $data['idMovie'],
        'thumbsUp' => $data['thumbsUp']),
    ]);
}
