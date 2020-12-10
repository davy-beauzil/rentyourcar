<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Vehicule;


class ManageCar extends Controller
{
    public function initialize(){
        return view('gestion-voiture');
    }
}
