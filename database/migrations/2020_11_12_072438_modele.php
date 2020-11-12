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
            $table->String('nom');
            $table->bigInteger('tarifKmSupplementaire');
            $table->bigInteger('nbPlace');
            $table->bigInteger('vitesseMax');
            $table->String('descritpion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modele', function (Blueprint $table) {
            //
        });
    }
}
