@extends('plantilla.origen')
@section("contenido")
	@foreach($todos as $cadauno)
		{{$cadauno->nombre}} {{$cadauno->apellidos}} ({{$cadauno->createdat}},{{$cadauno->updatedat}}) <br>
	@endforeach
@endsection
@section("titulo")
	PRUEBA 8
@endsection