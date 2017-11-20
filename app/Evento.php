<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model{
    protected $table = "tabla_eventos";
    protected $guarded = [];

    public function restarBoleto($ubiq_boleto){
    	switch($ubiq_boleto){
    		case "VIP": $this->VIP = $this->VIP - 1;
    			break;
    			
    		case "platino": $this->platino = $this->platino - 1;
    			break;

    		case "altos": $this->altos = $this->altos - 1;
    			break;

    		case "medios": $this->medios = $this->medios - 1;
    			break;
    	}
    }
}
