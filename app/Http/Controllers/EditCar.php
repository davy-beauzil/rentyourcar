<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Vehicule;
use Carbon\Carbon;

class EditCar extends Controller
{
    public function initialize(){
        return view('modification-voiture', ['button' => 'Modifier', 'action' => '']);
    }

    public function updateModeleInitialize(Request $request){
        $modeleId = $request->input('modeleId');
        $vehiculeId = $request->input('vehiculeId');

        $modele = Modele::where('id', '=', $modeleId)->first();
        return view('modification-voiture', ['button' => 'Modifier', 'modele' => $modele]);
    }

    public function updateModele(Request $request){

        if($request->input('btn-update') === '1'){
            $id = $request->input('id');
            $modele = Modele::find($id);
            
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
            }

            $saved = $modele->save();

            $modeles = Modele::All();
            $vehicules = Vehicule::All();

            if($saved){
                return view('gestion-voiture', ['message' => 'Le modèle a bien été mis à jour', 'classMessage' => 'alert-success', 'listeModeles' => $modeles, 'listeVehicules' => $vehicules]);
            }else{
                return view('gestion-voiture', ['message' => 'Une erreur est survenue', 'classMessage' => 'alert-danger', 'listeModeles' => $modeles, 'listeVehicules' => $vehicules]);
            }   
        }else if($request->input('btn-delete') === '1'){
            $modele = Modele::find($request->input('id'));
            $deleted = $modele->delete();

            if($deleted){
                return view('gestion-voiture', ['message' => 'Le modèle a bien été supprimé', 'classMessage' => 'alert-success']);
            }else {
                return view('gestion-voiture', ['message' => 'Une erreur est survenue', 'classMessage' => 'alert-danger']);
            }
        }
        
        
    }

    public function updateVehicule(Request $request){
        $id = $request->id;
        //$modeleId;
        //$dateAchat;

        //$vehicule = Vehicule::where('id', $id)->update(['modele_id' => $modeleId, 'dateAchat' => $dateAchat]);
        return view('gestion-voiture');
    }

    public function findModele(Request $request){

        $id = $request->id;
        $modele = Modele::where('id', '=', $id)->get();
        return response()->json($modele); 
        
    }

    public function findAllModeles(Request $request){

        $modeles = Modele::all();
        return response()->json($modeles);

    }

    public function findVehicule(Request $request){

        $id = $request->id;
        $vehicule = Vehicule::where('id', '=', $id)->get();
        $date = Vehicule::select('dateAchat')->where('id', '=', $id)->get();
        $dateFormated = Carbon::parse($date[0]['dateAchat'])->format('Y-m-d\TH:i');
        $vehicule[0]['dateAchat'] = $dateFormated;
        return response()->json($vehicule);

    }

    public function findAllVehicules(Request $request){

        //$vehicules = Vehicule::all();
        $vehicules = Vehicule::join('modele', 'vehicule.modele_id', '=', 'modele.id')
            ->select('vehicule.id as id', 'modele.nom as nomModele', 'vehicule.modele_id')
            ->orderBy('nomModele', 'desc')
            ->get();
            
        return response()->json($vehicules);

    }
}
