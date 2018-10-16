<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/funciones.js"></script>
	<script>

		$( document ).ready( 	 function (){
			$('#segundo').click( function (){
				var edad=6;
				if (edad<12){
					alert('esta en la primaria');
				}else{
					alert('ya debe haber salido de primaria');
				}
			});

			$('#otro').click( agregafila )
	});

	</script>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	click en el enlace 	<a href="#" onClick = "prim();"> de aqui </a>
<hr>
	Click en el segundo enlace <button id="segundo"> de aquí </button>
<hr>
<table id="tabla">
		<thead>
			<tr>
				<th>NOMBRE</th>
				<th>APELLIDO</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Juan</td>
				<td>Perez</td>
			</tr>
			<tr>
				<td>Maria</td>
				<td>Gomez</td>
			</tr>
		</tbody>
	</table>	
	<button id="otro" >otro</button>

</body>
</html>
