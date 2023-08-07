<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('education_level')->default("University");
            $table->string('field')->nullable();
            $table->string('specialization')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number');
            $table->string('email');
            $table->integer('age')->nullable();
            $table->string('interests')->nullable();
            $table->text('career_project')->nullable();
            $table->string('stage_requirements')->nullable();
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
        Schema::dropIfExists('personnes');
    }
}
