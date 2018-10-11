<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class carro extends Model {
	public function aquien(){
	  return $this->hasOne('App\Http\Models\usuario', 'id', 'propietario')
		->withDefault( ['nombre'=>'Sin propietario']);
	  ;   
	}
}