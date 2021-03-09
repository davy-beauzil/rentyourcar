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

        $saved = false;
        $modele = new Modele();
        $modele->nom = $request->input('nom');
        $modele->tarifKmSupplementaire = $request->input('tarifKmSupplementaire');
        $modele->nbPlaces = $request->input('nbPlaces');
        $modele->vitesseMax = $request->input('vitesseMax');
        $modele->description = $request->input('description');


        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $extension = $image->extension();
            $filename = time() . '.' . $extension;
            $image->move(public_path('img'), $filename);
            $modele->pathImage = $filename;
            $saved = $modele->save();
        }

        if(!$saved){
            return view('gestion-voiture', ['message' => 'Une erreur s\'est produite pendant l\'enregistrement du modèle de véhicule', 'classMessage' => 'alert-danger']);
        }else{
            return view('gestion-voiture', ['message' => 'Le modèle de voiture a bien été enregistré', 'classMessage' => 'alert-success']);
        }
    }

    public function updateModele(Request $request){

        $id = $request->input('id');
        $nom = $request->input('nom');
        $tarifKmSupplementaire = $request->input('tarifKmSupplementaire');
        $nbPlaces = $request->input('nbPlaces');
        $vitesseMax = $request->input('vitesseMax');
        $description = $request->input('description');

        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $extension = $image->extension();
            $filename = time() . '.' . $extension;
            $image->move(public_path('img'), $filename);
            $pathImage = $filename;

            $modele = Modele::find($id)
            ->update(['nom' => $nom,
            'tarifKmSupplementaire' => $tarifKmSupplementaire,
            'nbPlaces' => $nbPlaces, 'vitesseMax' => $vitesseMax,
            'description' => $description, 'pathImage' => $pathImage]);
        }else{
            $modele = Modele::find($id)
            ->update(['nom' => $nom,
            'tarifKmSupplementaire' => $tarifKmSupplementaire,
            'nbPlaces' => $nbPlaces, 'vitesseMax' => $vitesseMax,
            'description' => $description]);
        }

        if($modele){
            return view('gestion-voiture', ['message' => 'Le modèle a bien été mis à jour', 'classMessage' => 'alert-success']);
        }else{
            return view('gestion-voiture', ['message' => 'Une erreur est survenue', 'classMessage' => 'alert-danger']);
        }   
    }
}
