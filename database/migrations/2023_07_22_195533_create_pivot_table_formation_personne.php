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
            $table->id();
            $table->foreignId('formation_id')->constrained()->onDelete ('cascade');
            $table->foreignId('personne_id')->constrained()->onDelete ('cascade');
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
        Schema::dropIfExists('pivot_table_formation_personne');
    }
}
