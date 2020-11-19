<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';

    public function pays(){
        return $this->belongsTo('App\Models\Pays');
    }

    public function locations(){
        return $this->hasMany('App\Models\Location');
    }
}
