@extends('plantilla.origen')
@section("contenido")
<form  method="POST"  action="/carros/add">
	@csrf
	MODELO: <input type="text" name="modelo">
	<input type="submit" value="enviar">
</form>
@endsection
@section("titulo")
	AGREGANDO UN CARRO
@endsection