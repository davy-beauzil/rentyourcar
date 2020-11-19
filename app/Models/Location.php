<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'location';

    public function Vehicule() {
        // Une adresse appartient à un fournisseur
        return $this->belongsTo('App\Models\Ve');
    }

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }



    /*
    public function Formule() {
        // Une adresse appartient à un fournisseur
        return $this->belongsTo(Formule::class);
    }
    */

    protected $guarded = [];
}
