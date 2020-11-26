<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Vehicule;


class ManageCar extends Controller
{
    public function initialize(){
        $modeles = Modele::All();
        $vehicules = Vehicule::All();
        return view('gestion-voiture', ['listeModeles' => $modeles, 'listeVehicules' => $vehicules]);
    }
}
