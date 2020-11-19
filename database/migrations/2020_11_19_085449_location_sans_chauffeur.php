<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LocationSansChauffeur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locationSansChauffeur', function(Blueprint $table){
            $table->unsignedBigInteger('location_id');
            $table->integer('nbmkDepart');
            $table->integer('nbmkRetour');
            $table->foreign('location_id')->references('numLocation')->on('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locationSansChauffeur');
    }
}
