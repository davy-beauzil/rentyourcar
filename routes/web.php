<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateCar;
use App\Http\Controllers\EditCar;
use App\Http\Controllers\ManageCar;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/vehicule', [ListeCar::class, 'initialize']);

/* Gestion voiture */
// page de choix
Route::get('/gestion-voiture', [ManageCar::class, 'initialize']);

    // création modele
    Route::post('/findModele', [EditCar::class, 'findModele']);
    Route::post('/findVehicule', [EditCar::class, 'findVehicule']);
    Route::post('/findAllModeles', [EditCar::class, 'findAllModeles']);
    Route::post('/findAllVehicules', [EditCar::class, 'findAllVehicules']);

    Route::post('/create-modele', [CreateCar::class, 'createModele']);
    Route::post('/update-modele', [EditCar::class, 'updateModele']);
    Route::post('/create-vehicule', [CreateCar::class, 'createVehicule']);
    Route::post('/update-vehicule', [EditCar::class, 'updateVehicule']);
/*
    Route::post('create-modele', [CreateCar::class, 'createModele']);
    Route::post('update-modele', [EditCar::class, 'updateModele']);
    Route::post('create-vehicule', [CreateCar::class, 'createVehicule']);
    Route::post('update-vehicule', [EditCar::class, 'updateVehicule']);
*/
    Route::get('/test/{id}', [EditCar::class, 'test']);

    // création vehicule
    // modification modele


Route::post('/gestion-voiture', [EditCar::class, 'updateModele']);







Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/vehicule', function () {
    return view('vehicule');
});

Route::get('/contact', function () {
    return view('contact');
});


use App\Http\Controllers\LocationVehicule;
Route::get('ficheVehicule/{n}', [LocationVehicule::class, 'recup'])->where('n', '[0-9]+');

use App\Http\Controllers\RechercheLoc;
Route::get('rechercheDate/{n}/{date}', [RechercheLoc::class, 'initialize'])->where('n', '[0-9]+')->where('date');


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function ()    {
    });
    Route::get('comptes', function () {
    });
});

Auth::routes();
use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index'])->name('home');


