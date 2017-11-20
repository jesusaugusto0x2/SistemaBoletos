<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model{
    protected $table = "tabla_boletos";
    protected $guarded = [];

    public function usuario(){
    	return $this->hasOne('App\Usuario', 'id', 'id_usuario');
    }

    public function evento(){
    	return $this->hasOne('App\Evento', 'id', 'id_evento');
    }
}
