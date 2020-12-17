<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;

class CreateCar extends Controller
{
    public function initialize(){
        return view('creation-voiture', ['button' => 'Créer', 'action' => '/creation-voiture']);
    }

    public function createModele(Request $request){

        $modele = new Modele();
        $modele->nom = $request->input('nom');
        $modele->tarifKmSupplementaire = $request->input('tarifKmSupplementaire');
        $modele->nbPlaces = $request->input('nbPlaces');
        $modele->vitesseMax = $request->input('vitesseMax');
        $modele->description = $request->input('description');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->extension();
            $filename = time() . '.' . $extension;
            $image->move(public_path('img'), $filename);
            $modele->pathImage = $filename;
        }
    
        $saved = $modele->save();

        /*if(!$saved){
            return view('gestion-vehicule', ['message' => 'Une erreur s\'est produite pendant l\'enregistrement du modèle de véhicule', 'classMessage' => 'alert-danger', 'function' => 'showMessage()']);
        }else{
            return view('gestion-vehicule', ['message' => 'Le modèle de voiture a bien été enregistré', 'classMessage' => 'alert-success', 'function' => 'showMessage()']);
        }*/
    }

    public function updateModele(Request $request){

        $id = $request->id;
        $nom = $request->input('nom');
        $tarifKmSupplementaire = $request->input('tarifKmSupplementaire');
        $nbPlaces = $request->input('nbPlaces');
        $vitesseMax = $request->input('vitesseMax');
        $description = $request->input('description');

        $image = $request->file('photo');
        $extension = $image->extension();
        $filename = time() . '.' . $extension;
        $image->move(public_path('img'), $filename);
        $modele->pathImage = $filename;

        $modele = Modele::find($id)
            ->update(['nom' => $nom, 
            'tarifKmSupplementaire' => $tarifKmSupplementaire, 
            'nbPlaces' => $nbPlaces, 'vitesseMax' => $vitesseMax, 
            'description' => $description]);

        return view('creation-voiture', ['button' => 'Créer', 'action' => '/creation-voiture', 'message' => 'Modèle correctement mis à jour']);
    }
}
