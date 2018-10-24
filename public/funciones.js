function agregafila(){
	var nom2 = document.getElementById("texto_nom").value;
	var nom  = $('#texto_nom').val();
	var app = 	$('#texto_app').val();
	var app = 	$('#texto_app').val();
	var tok = $('input[name=_token]').val();
	var datos = { _token : tok, nombre :  nom, apellidos: app}
	$('#otro').hide();
$.post( "/usuarios/add2", datos, function( data ) {
	$('#tabla >tbody').append('<tr id="' + data.id  + '"><td class="col_nombre">' + data.nombre  + '</td><td>' + data.apellidos + '</td></tr>');
	$('#otro').show();
}, "json");
}

function borrar(){
//	alert( this.innerText );
	this.parentNode.remove();

}


