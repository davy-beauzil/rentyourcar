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

    public function dropModele(Request $request){
        $id = $request->input('id');
        $modele = Modele::find($id);
        $deleted = $modele->delete();

        if($deleted){
            return view('gestion-voiture', ['message' => 'Le modèle a bien été supprimé', 'classMessage' => 'alert-success']);
        }else {
            return view('gestion-voiture', ['message' => 'Une erreur est survenue', 'classMessage' => 'alert-danger']);
        }
    }

    public function createVehicule(Request $request){

        $vehicule = new Vehicule();
        $vehicule->modele_id = $request->input('modele');
        $vehicule->dateAchat = $request->input('dateAchat');
        $saved = $vehicule->save();

        if($saved){
            return view('gestion-voiture', ['message' => 'Le véhicule a bien été créé', 'classMessage' => 'alert-success']);
        }else {
            return view('gestion-voiture', ['message' => 'Une erreur est survenue', 'classMessage' => 'alert-danger']);
        }
    }

    public function updateVehicule(Request $request){

        $id = $request->input('id');
        $vehicule = Vehicule::find($id);

        $vehicule->modele_id = $request->input('modele');
        $vehicule->dateAchat = $request->input('dateAchat');

        $saved = $vehicule->save();

        if($saved){
            return view('gestion-voiture', ['message' => 'Le véhicule a bien été modifié', 'classMessage' => 'alert-success']);
        }else{
            return view('gestion-voiture', ['message' => 'Une erreur est survenue', 'classMessage' => 'alert-danger']);
        }
    }
}
