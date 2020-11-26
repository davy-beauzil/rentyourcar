<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateCar;
use App\Http\Controllers\EditCar;
use App\Http\Controllers\ManageCar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/article{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');
Route::get('/fournisseur{n}', [FournisseurController::class, 'show'])->where('n', '[0-9]+');

Route::get('/create-fournisseur', [CreateFournisseurController::class, 'form']);
Route::post('/create-fournisseur', function(){
    $fournisseur = new Fournisseur;
    $fournisseur->nom = request('nom');
    $fournisseur->adresse_id = request('id');
    $fournisseur->save();
    return view('form-create-fournisseur');
});
Route::get('/fournisseur-start-with-{n}', [FournisseurController::class, 'startWith']);
*/

Route::get('/', function () {
    return view('accueil');
});


Route::get('/gestion-voiture', [ManageCar::class, 'initialize']);
Route::post('/gestion-voiture', [EditCar::class, 'updateCar']);


Route::get('/modification-voiture', [EditCar::class, 'initialize']);

Route::get('/creation-voiture', [CreateCar::class, 'initialize']);
Route::post('/creation-voiture', [CreateCar::class, 'createNewModel']);


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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


