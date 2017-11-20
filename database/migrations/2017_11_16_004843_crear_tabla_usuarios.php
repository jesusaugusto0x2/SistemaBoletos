<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('tabla_usuarios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula');
            $table->string('direccion');
            $table->char('sexo');
            $table->bigInteger('telefono');
            $table->string('correo');

            $table->string('user');
            $table->string('password');      
            $table->string('password_rep');     

            $table->boolean('es_admin')->default(false); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('tabla_usuarios');
    }
}
