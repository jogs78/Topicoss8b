@extends('plantilla.origen')
@section("contenido")
<form  method="POST"  action="/usuarios/add">
	@csrf
	NOMBRE: <input type="text" name="nombre">
	APELLIDOS: <input type="text" name="apellidos">
	<input type="submit" value="enviar">
</form>
@endsection
@section("titulo")
	AGREGANDO UN CARRO
@endsection