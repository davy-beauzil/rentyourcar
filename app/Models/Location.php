<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function Vehicule() {
        // Une adresse appartient à un fournisseur
        return $this->belongsTo(Vehicule::class);
    }

    public function Formule() {
        // Une adresse appartient à un fournisseur
        return $this->belongsTo(Formule::class);
    }

    protected $guarded = [];
}
