function agregafila(){
	var nom2 = document.getElementById("texto_nom").value;
	var nom  = $('#texto_nom').val();
	var app = 	$('#texto_app').val();
//$('meta[name="csrf-token"]').content()
	var datos = {
		_token : $('input[name=_token]').val(),
		nombre : $('#texto_nom').val(),
		apellidos : $('#texto_app').val()
	}
	$('#otro').hide();
	$.post( "usuarios/add2", datos , function( data ) {
		console.log(data);
		$('#tabla >tbody').append('<tr id="' + data.id + '"><td class="col_nombre">' + data.nombre + '</td><td>' + data.apellidos + '</td></tr>');
		$('#otro').show();
	}, "json");

}

function borrar(){
//	alert( this.innerText );
	this.parentNode.remove();

}