<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormuleSansChauffeur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formuleSansChauffeur', function(Blueprint $table){
            $table->id();
            $table->string('libelle');
            $table->integer('duree');
            $table->integer('nbkmInclus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formuleSansChauffeur');
    }
}
