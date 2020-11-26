<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditCar extends Controller
{
    public function initialize(){
        return view('modification-voiture', ['button' => 'Modifier', 'action' => '']);
    }

    public function updateCar(Request $request){
        $modeleId = $request->select('');
        $vehiculeId = $request->select('');
        return view('modification-voiture', ['button' => 'Modifier', 'action' => '']);
    }
}
