<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormuleSansChauffeur extends Model
{
    use HasFactory;

    protected $table = 'location';

    public function modeles() {
        // Une adresse appartient à un fournisseur
        return $this->hasMany('App\Models\Modele_FormuleSansChauffeur');
    }

    public function locationsSansChauffeur(){
        return $this->hasMany('App\Models\LocationSansChauffeur');
    }
}
