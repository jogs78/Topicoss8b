@extends('plantilla.origen')
@section("contenido")
<form  method="POST"  action="/carros/delete/{{$elemento->id}}">
	@csrf
	MODELO: <input type="text" name="modelo" value="{{$elemento->modelo}}" disabled>
	<input type="submit" value="enviar">
</form>
@endsection
@section("titulo")
	EDITANDO UN CARRO
@endsection