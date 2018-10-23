<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\usuario;

class PrimerControlador extends Controller
{

	public function PrimerAccion(){
		return view('somos');
	}


	public function SegundaAccion(){
		return view('contacto');
	}

	public function TercerAccion(){
		return view('prueba.mensaje');
	}

	public function CuartaAccion($uno){
		return view('prueba.conparametro', compact('uno')  );
	}

	public function QuintaAccion(){
		return view('prueba.quinta');
	}
	public function SextaAccion(){
		return view('prueba.sexta');
	}
	public function Accion7(){
		return view('prueba.septima');
	}
	public function Accion8(Request $request){

		$campos = $request->all();
		$nombre = $campos['nombre'];
		$edad = $campos['edad'];

		if($edad > 18) $mensaje = "puedes votar";
		else $mensaje = "te falta edad";

		return view('prueba.octava', compact('nombre','mensaje') );
	}

	public function Accion9(){
		$todos = usuario::all();
		return view('todos',compact('todos'));
	}


	public function Accion10(){

		return view('dinamica');
	}



}
