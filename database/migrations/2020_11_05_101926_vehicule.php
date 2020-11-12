<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehicule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modele_id');
            $table->dateTime('dateAchat');
            $table->timestamps();
            $table->foreign('modele_id')->references('id')->on('modele');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicule');
    }
}
