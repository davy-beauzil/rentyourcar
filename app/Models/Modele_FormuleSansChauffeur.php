<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele_FormuleSansChauffeur extends Model
{
    use HasFactory;

    public function modele(){
        return $this->belongsTo('App\Models\Modele');
    }

    public function formuleSansChauffeur(){
        return $this->belongsTo('App\Models\FormuleSansChauffeur');
    }
}
