<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{

    protected $table = 'vehicule';

    public function modele(){
        return $this->belongsTo('App\Models\Modele');
    }
}