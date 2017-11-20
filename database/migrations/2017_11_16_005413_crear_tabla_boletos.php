<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBoletos extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('tabla_boletos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('serial');
            $table->string('ubicacion');

            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('tabla_usuarios');

            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('tabla_eventos');

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
        Schema::dropIfExists('tabla_boletos');
    }
}
