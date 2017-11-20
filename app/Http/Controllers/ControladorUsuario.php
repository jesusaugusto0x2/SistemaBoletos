<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Boleto;
use App\Evento;

class ControladorUsuario extends Controller{
   	
   	public function index(){
   		return view('index');
   	}

	public function verificar(Request $req){
		$user = Usuario::where('user', '=', $req->usuario)->where('password', '=', $req->password)->first();

		if($user ==  null){
			return redirect()->back()->with('alert', 'Los datos no coinciden. Por favor intente de nuevo.');
		}else{
			$req->session()->put('id_usuario', $user->id);
			$req->session()->put('nom_usuario', $user->nombre);
			$req->session()->put('ape_usuario', $user->apellido);
			$req->session()->put('usr_usuario', $user->user);
			$req->session()->put('tipo_usuario', $user->es_admin);

			return redirect()->route('usuario.acceder', $user);
		}
	}

	public function registrar(){
		return view('usuario.registro');
	}

	public function registroExitoso(){
		return view('general.registro_exitoso', ['mensaje' => 'Los datos han sido guardados con éxito', 'ruta' => 'usuario.index']);
	}

	public function registroFallido(){
		return view('usuario.registro_no_exitoso');
	}

	public function acceder(Usuario $user){
		$eventos = Evento::all();

		return view('usuario.vista')->with('eventos', $eventos);
	}

	public function agregar(Request $req){
		if($req->password == $req->password_rep){

			$nuevo = new Usuario($req->all());
			$nuevo->save();

			return redirect()->route('usuario.registroExi');
		}else{
			return redirect()->route('usuario.registroFal');
		}
	}
}