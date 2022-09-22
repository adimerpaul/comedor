<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuevos', function (Blueprint $table) {
            $table->id();
            $table->string('ficha');
            $table->string('matricula');
            $table->string('croquisFoto');
            $table->string('ci');
            $table->string('diploma');
            $table->string('papeleta');
            $table->string('certificacion');
            $table->string('ciPadres');
            $table->string('libretaFamiliar');
            $table->string('certificadoDefuncion');
            $table->string('sentencia');
            $table->string('denuncia');
            $table->string('croquis');
            $table->unsignedBigInteger('semestre_id');
            $table->foreign('semestre_id')->references('id')->on('semestres');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('nuevos');
    }
};
