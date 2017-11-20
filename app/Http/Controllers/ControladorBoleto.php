<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Boleto;
use App\Evento;

class ControladorBoleto extends Controller{
    
	public function crear($id_ev){
		return view('boleto.registrar')->with('id_ev', $id_ev);
	}

	public function agregar(Request $req){

		if($req->ubicacion == '-'){
			return redirect()->back()->with('alert', 'Debes seleccionar una ubicacion válida.');
		}

		$boleto = new Boleto();

		$boleto->serial = $req->input('serial');
		$boleto->ubicacion = $req->ubicacion;
		$boleto->id_usuario = $req->session()->get('id_usuario');
		$boleto->id_evento = $req->id_ev;

		$boleto->save();

		$evento = Evento::find($req->id_ev);

		$evento->restarBoleto($req->ubicacion);
		$evento->save();

		return redirect()->route('boleto.mostrar', $boleto->id);
	}

	public function mostrar($id_bol){		
		$boleto = Boleto::find($id_bol);
	
		return view('boleto.mostrar')->with('boleto', $boleto);
	}
}
