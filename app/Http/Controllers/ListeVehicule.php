<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Vehicule;

class ListeVehicule extends Controller
{
    public function initialize(){
        return view('vehicule');
    }

    public function listeCar(Request $request){
        $modeles = Modele::All();
        return view('vehicule', ['listeModele' => $modeles]);
    }
}
