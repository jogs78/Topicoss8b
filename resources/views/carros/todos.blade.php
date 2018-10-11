@extends('plantilla.origen')
@section("contenido")
	<table border="1">
		<thead>
			<th>CRUD</th>
			<th>MODELO</th>
			<th>PROPIETARIO</th>
		</thead>
		<tbody>
	@foreach($todos as $cadauno)
			<tr>
				<td>
					<a href="/carros/agregar">CREATE</a> 
					<a href="/carros/actualizar/{{$cadauno->id}}">UPDATE</a> 
					<a href="/carros/borrar/{{$cadauno->id}}">DELETE</a>
				</td>
				<td>{{$cadauno->modelo}}</td>
				<td>{{ $cadauno->aquien->nombre}}</td>
			</tr>
	@endforeach
		</tbody>
	</table>

@endsection
@section("titulo")
	PRUEBA 8
@endsection