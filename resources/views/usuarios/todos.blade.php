@extends('plantilla.origen')
@section("contenido")
	<table border="1">
		<thead>
			<th>CRUD</th>
			<th>DATOS</th>
		</thead>
		<tbody>
	@foreach($todos as $cadauno)
			<tr>
				<td>
					<a href="/usuarios/agregar">CREATE</a> 
					<a href="/usuarios/actualizar/{{$cadauno->id}}">UPDATE</a> 
					<a href="/usuarios/borrar/{{$cadauno->id}}">DELETE</a>
				</td>
				<td>{{$cadauno->nombre}},{{$cadauno->apellidos}}</td>
			</tr>
	@endforeach
		</tbody>
	</table>

@endsection
@section("titulo")
	PRUEBA 8
@endsection