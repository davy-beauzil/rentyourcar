<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function create()
    {
        return view('formLocation');
    }

    public function store(Request $request)
    {
        return $request->input('nom');
    }
}
