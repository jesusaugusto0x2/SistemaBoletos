<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Boleto;
use App\Evento;

class ControladorEvento extends Controller{
    public function crear(){
   		return view('evento.registrar');
    }

    public function agregar(Request $req){
   		$evento = new Evento($req->all());
   		$evento->save();

   		return view('general.registro_exitoso', ['mensaje' => 'El evento ha sido guardado con éxito', 'ruta' => 'usuario.admin']);
    }

    public function verBoletos(Evento $ev){
    	$boletos = Boleto::where('id_evento', '=', $ev->id)->get();

    	return view('usuario.mostrar_boletos', ['evento' => $ev, 'boletos' => $boletos]);
    }

    public function editar($ev){
    	$evento = Evento::find($ev);
   	
    	return view('evento.editar', ['evento' => $evento]);
    }

    public function guardarEdit(Request $req){
    	$evento_edit = Evento::find($req->id_evento);

    	$evento_edit->nombre = $req->nombre;
    	$evento_edit->fecha = $req->fecha;
    	$evento_edit->VIP = $req->VIP;
    	$evento_edit->platino = $req->platino;
    	$evento_edit->altos = $req->altos;
    	$evento_edit->medios = $req->medios;

    	$evento_edit->save();

    	return redirect()->route('usuario.acceder');
    }

    public function eliminar($id){
    	$evento_elim = Evento::find($id);

    	$boletos_elim = Boleto::where('id_evento', '=', $id)->get();

    	for($i = 0; $i < $boletos_elim->count(); $i++){
    		$boletos_elim[$i]->delete();
    	}

    	$evento_elim->delete();

    	return redirect()->back();
    }
}
