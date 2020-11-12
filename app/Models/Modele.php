<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{

    protected $table = 'modele';

    public function vehicules(){
        return $this->hasMany('App\Models\Vehicule');
    }
}
