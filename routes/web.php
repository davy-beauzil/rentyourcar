<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});


Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/vehicule', function () {
    return view('vehicule');
});

Route::get('/contact', function () {
    return view('contact');
});


use App\Http\Controllers\LocationController;
Route::get('/ficheVehicule', function () {
    return view('ficheVehicule');
});





>>>>>>> routes/web.php

