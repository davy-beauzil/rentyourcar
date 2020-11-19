<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('mail');
            $table->string('tel');
            $table->string('adresse');
            $table->string('cp');
            $table->string('ville');
            $table->unsignedBigInteger('pays_id');
            $table->string('motDePasse');
            $table->timestamps();
            $table->foreign('pays_id')->references('id')->on('pays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');

    }
}
