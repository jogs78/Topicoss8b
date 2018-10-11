@extends('plantilla.origen')
@section("contenido")
<form  method="POST"  action="/usuarios/update/{{$elemento->id}}">
	@csrf
	NOMBRE: <input type="text" name="nombre" value="{{$elemento->nombre}}">
	APELLIDOS: <input type="text" name="apellidos" value="{{$elemento->apellidos}}">
	<input type="submit" value="enviar">
</form>
@endsection
@section("titulo")
	EDITANDO UN CARRO
@endsection