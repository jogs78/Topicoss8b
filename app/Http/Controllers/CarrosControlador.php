<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\carro;

class CarrosControlador extends Controller
{


	public function listar(){
		$todos = carro::all();
		return view('carros.todos',compact('todos'));
	}
	public function agregar(){
		return view('carros.agregar');
	}
	public function add(Request $request){
		$nuevo = new carro;
		$nuevo->modelo = $request->get('modelo');
		$nuevo->save();
		return redirect('carros');

	}
	public function actualizar($id){
		$elemento = carro::find($id);
		return view('carros.actualizar',compact('elemento'));
	}

	public function update(Request $request, $id){
		$elemento = carro::find($id);
		$elemento->modelo = $request->get('modelo');
		$elemento->save();
		return redirect('carros');
	}

	public function borrar($id){
		$elemento = carro::find($id);
		return view('carros.borrar',compact('elemento'));
	}


	public function delete(Request $request, $id){
		$elemento = carro::find($id);
		$elemento->delete();
		return redirect('carros');
	}




}