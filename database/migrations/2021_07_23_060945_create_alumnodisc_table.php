<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnodiscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnodisc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumnoId');
            $table->unsignedBigInteger('discapacidadId');
            $table->timestamps();
        });
        Schema::table('alumnodisc', function (Blueprint $table) {
            $table->foreign('alumnoId')->references('id')->on('alumno');
            $table->foreign('discapacidadId')->references('id')->on('discapacidad');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnodisc');
    }
}
