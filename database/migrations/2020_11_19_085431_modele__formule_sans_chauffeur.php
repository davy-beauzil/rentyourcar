<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModeleFormuleSansChauffeur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele_formuleSansChauffeur', function(Blueprint $table){
            $table->unsignedBigInteger('modele_id');
            $table->unsignedBigInteger('formuleSansChauffeur_id');
            $table->foreign('modele_id')->references('id')->on('modele');
            $table->foreign('formuleSansChauffeur_id')->references('id')->on('formuleSansChauffeur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modele_formuleSansChauffeur');
    }
}
