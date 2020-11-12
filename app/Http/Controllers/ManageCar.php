<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageCar extends Controller
{
    public function initialize(){
        return view('gestion-voiture');
    }
}
