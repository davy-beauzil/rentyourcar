<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Vehicule;
use App\Models\Location;

class RechercheLoc extends Controller
{
    public function initialize($n,$date){

        $vehicules = Vehicule::where('modele_id', '=', $n)->get();


        $location = DB::table('location')
            ->select('dateLocation', $vehicules)
            ->where('dateLocation','=',$date)
            ->get();


        return view('rechercheDate')->with('reservation', $location);

    }
}
