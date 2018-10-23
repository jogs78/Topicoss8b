function agregafila(){
	var nom2 = document.getElementById("texto_nom").value;
	var nom  = $('#texto_nom').val();
	var app = 	$('#texto_app').val();
	$('#tabla >tbody').append('<tr><td class="col_nombre">' +nom2 + '</td><td>' +app+ '</td></tr>');
}

function borrar(){
//	alert( this.innerText );
	this.parentNode.remove();

}