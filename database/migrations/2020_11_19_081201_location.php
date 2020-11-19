<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Location extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id('numLocation');
            $table->datetime('dateLocation');
            $table->float('montantRegle', 10, 2);
            $table->datetime('dateHreDepartPrevu');
            $table->datetime('dateHreDepartReel');
            $table->datetime('dateHreRetourPrevu');
            $table->datetime('dateHreRetourReel');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('vehicule_id');
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('client');
            $table->foreign('vehicule_id')->references('id')->on('vehicule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location');
    }
}
