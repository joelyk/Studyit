<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableFormationPersonne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_personne', function (Blueprint $table) {
         $table->unsignedBigInteger('formations_id');
          $table->unsignedBigInteger('personnes_id');
         $table->foreign('formations_id')->references('id')->on('formations')->onDelete('cascade');
         $table->foreign('personnes_id')->references('id')->on('personnes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_formation_personne');
    }
}
