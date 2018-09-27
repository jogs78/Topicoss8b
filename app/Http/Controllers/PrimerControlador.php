<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PrimerControlador extends Controller
{
	public function PrimerAccion(){
		return view('somos');
	}
	public function SegundaAccion(){
		return view('contacto');
	}

}
