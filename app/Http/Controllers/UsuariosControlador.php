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
		return $nuevo->toArray();
	}



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

	public function updatename(Request $request){
		$elemento = usuario::find($request->get('id'));
		$elemento->nombre = $request->get('nombre');
		$elemento->save();
		return $elemento->toJson();
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

	public function deleterow(Request $request){
		$elemento = usuario::find($request->get('id'));
		try{
				$elemento->delete();
				$regresar = array('borrado' =>  true, 'mensaje' => 'Usuario borrado.', 'id' => $request->get('id') ); 
    }catch (\Illuminate\Database\QueryException $e){
            if($e->getCode()==23000) $regresar = array('borrado' =>  false, 'mensaje' => 'No se puede borrar al usuario porque lo estan usando en otra tabla.' ); 
            $regresar = array('borrado' =>  false, 'mensaje' => 'Error al borrar el usuario.' ); 
    }
		return json_encode($regresar);
	}
}