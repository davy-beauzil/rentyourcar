<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationSansChauffeur extends Model
{
    use HasFactory;

    public function formuleSansChauffeur(){
        return $this->belongsTo('App\Models\FormuleSansChauffeur');
    }

    public function location(){
        return $this->belongsTo('App\Models\Location');
    }
}
