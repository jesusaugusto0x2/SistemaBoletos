<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEventos extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('tabla_eventos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->date('fecha');

            $table->integer('VIP');
            $table->integer('platino');
            $table->integer('altos');
            $table->integer('medios');

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
        Schema::dropIfExists('tabla_eventos');
    }
}
