<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Modele extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->float('tarifKmSupplementaire', 4, 2);
            $table->integer('nbPlaces');
            $table->integer('vitesseMax');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modele');
    }
}
