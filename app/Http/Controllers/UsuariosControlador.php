<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\usuario;

class UsuariosControlador extends Controller
{


	public function listar(){
		$todos = usuario::all();
		return view('usuarios.todos',compact('todos'));
	}
	public function agregar(){
		return view('usuarios.agregar');
	}
	public function add(Request $request){
		$nuevo = new usuario;
//		$nuevo->nombre = $request->get('nombre');
//		$nuevo->apellidos= $request->get('apellidos');
//var_dump($request->all() );

		$nuevo->fill( $request->all() );
		$nuevo->save();
		return redirect('usuarios');

	}
	public function add2(Request $request){
		$nuevo = new usuario;
		$nuevo->fill( $request->all() );
		$nuevo->save();
		return $nuevo->toJson();
	}
/*
		ob_start();
  	var_dump( $request->all());
  	$result = ob_get_clean();
  	return $result;
*/
	public function actualizar($id){
		$elemento = usuario::find($id);
		return view('usuarios.actualizar',compact('elemento'));
	}

	public function update(Request $request, $id){
		$elemento = usuario::find($id);
		$elemento->modelo = $request->get('modelo');
		$elemento->save();
		return redirect('usuarios');
	}

	public function borrar($id){
		$elemento = usuario::find($id);
		return view('usuarios.borrar',compact('elemento'));
	}


	public function delete(Request $request, $id){


		$elemento = usuario::find($id);
		try{
				$elemento->delete();
    }catch (\Illuminate\Database\QueryException $e){
            if($e->getCode()==23000) return redirect('error');
        }
		return redirect('usuarios');


	}




}