<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'ControladorUsuario@index', 'as' => 'usuario.index']);


//** ----------------------------------------RUTAS DE USUARIO-------------------------------------------**//

Route::post('usuario/verificar', ['uses' => 'ControladorUsuario@verificar', 'as' => 'usuario.verificar']);

Route::get('usuario/registrar', ['uses' => 'ControladorUsuario@registrar', 'as' => 'usuario.registrar']);

Route::post('usuario/agregar', ['uses' => 'ControladorUsuario@agregar', 'as' => 'usuario.agregar']);

Route::get('usuario/registroExi', ['uses' => 'ControladorUsuario@registroExitoso', 'as' => 'usuario.registroExi']);

Route::get('usuario/registroFal', ['uses' => 'ControladorUsuario@registroFallido', 'as' => 'usuario.registroFal']);

Route::get('usuario/acceso', ['uses' => 'ControladorUsuario@acceder', 'as' => 'usuario.acceder']);

//** --------------------------------------------------------------------------------------------------**//

//** ----------------------------------------RUTAS DE EVENTO-------------------------------------------**//

Route::get('evento/crear', ['uses' => 'ControladorEvento@crear', 'as' => 'evento.crear']);

Route::post('evento/agregar', ['uses' => 'ControladorEvento@agregar', 'as' => 'evento.agregar']);

Route::get('evento/ver/{ev?}', ['uses' => 'ControladorEvento@verBoletos', 'as' => 'evento.verboletos']);

Route::get('evento/eliminar/{id?}', ['uses' => 'ControladorEvento@eliminar', 'as' => 'evento.eliminar']);

Route::get('evento/editar/{id?}', ['uses' => 'ControladorEvento@editar', 'as' => 'evento.editar']);

Route::post('evento/guardarEdit', ['uses' => 'ControladorEvento@guardarEdit', 'as' => 'evento.guardarEdit']);

//** --------------------------------------------------------------------------------------------------**//

//** ----------------------------------------RUTAS DE BOLETO-------------------------------------------**//

Route::get('boleto/crear/{id_ev?}', ['uses' => 'ControladorBoleto@crear', 'as' => 'boleto.crear']);

Route::post('boleto/agregar', ['uses' => 'ControladorBoleto@agregar', 'as' => 'boleto.agregar']);

Route::get('boleto/mostrar/{id_bol?}', ['uses' => 'ControladorBoleto@mostrar', 'as' => 'boleto.mostrar']);

//** --------------------------------------------------------------------------------------------------**//