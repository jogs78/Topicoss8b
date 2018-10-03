@extends('plantilla.origen')
@section("contenido")
<table border="2">
	<tr>
	<td>1</td>
	<td>2</td>
	</tr>
	<tr>
	<td>3</td>
	<td>4</td>		
	</tr>
</table>
<hr>
<form  method="POST"  action="enviado">
	@csrf
	NOMBRE: <input type="text" name="nombre">
	<BR>
	APELLIDO: <input type="text" name="apellido">
	<br>
	cumplaños: <input type="date" name="cumple">
	<br>
	edad: <input type="number" name="edad">
	<input type="submit" value="enviar">
</form>

@endsection
@section("titulo")
	PRUEBA 7
@endsection