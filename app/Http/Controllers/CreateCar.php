<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;

class CreateCar extends Controller
{
    public function initialize(){
        return view('creation-voiture', ['button' => 'Créer', 'action' => '/creation-voiture']);
    }

    public function createNewModel(Request $request){
        $modele = new Modele();
        $modele->nom = $request->input('nom');
        $modele->tarifKmSupplementaire = $request->input('tarifKmSupplementaire');
        $modele->nbPlaces = $request->input('nbPlaces');
        $modele->vitesseMax = $request->input('vitesseMax');
        $modele->description = $request->input('description');

        $image = $request->file('photo');
        $extension = $image->extension();
        $filename = time() . '.' . $extension;
        $image->move(public_path('img'), $filename);
        $modele->pathImage = $filename;

        $modele->save();

        return view('creation-voiture', ['button' => 'Créer', 'action' => '/creation-voiture']);
    }
}
