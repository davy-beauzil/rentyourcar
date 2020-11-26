<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Vehicule;
use App\Models\Location;

class LocationVehicule extends Controller
{
    public function recup($n){

        $numero = Modele::find($n);
        $vehicule = Vehicule::All();
        $location = Location::All();

        return view('ficheVehicule')->with('numero', $numero, ['listeVehicule'=>$vehicule, 'listeLocation'=>$location]);

    }
}

