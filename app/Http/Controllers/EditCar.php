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
        return view('modification-voiture', ['button' => 'Modifier', 'modele' => $modrele]);
    }

    public function updateModele(Request $request){
        $id = $request->input('modele-id');
        $nom = $request->input('nom');
        $tarifKmSupplementaire = $request->input('tarifKmSupplementaire');
        $nbPlaces = $request->input('nbPlaces');
        $vitesseMax = $request->input('vitesseMax');
        $description = $request->input('description');

        $modeleToUpdate = Modele::where('id', $id)->update(['nom' => $nom, 'tarifKmSupplementaire' => $tarifKmSupplementaire, 'nbPlaces' => $nbPlaces, 'vitesseMax' => $vitesseMax, 'description' => $description]);

        $modeles = Modele::All();
        $vehicules = Vehicule::All();
        return view('gestion-voiture', ['listeModeles' => $modeles, 'listeVehicules' => $vehicules]);
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
