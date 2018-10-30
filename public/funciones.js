var MostrandoInput = false;


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
// this.parentNode.remove();
	var id = this.parentNode.id;
	var tok = $('input[name=_token]').val();

	var datos = { _token : tok, id: id }
			$.post( "/usuarios/deleterow ", datos, function( data ) {
				if(data.borrado){
					$('#'+data.id).remove();
					//this.parentNode.remove();
				}else{
					alert(data.mensaje);
				}
			}, "json");



}

function editarnombre(){
	if (MostrandoInput) return;
	var valor = this.innerText;
	$(this).html('<input class="input_nombre" value = "' + valor + '" >');
	MostrandoInput = true;
}

function editarapellido(){
	alert( this.innerText );
}

function  teclazonombre ( event ) {
  try{
	  if ( event.which == 13 ) {
			var tok = $('input[name=_token]').val();
			var nom = this.value;
			var id = this.parentNode.parentNode.id;
			var datos = { _token : tok, nombre :  nom, id: id }
			$.post( "/usuarios/updatename ", datos, function( data ) {
					var ruta = '#tabla>tbody>#' + data.id + ">.col_nombre";
					$(ruta).text(data.nombre);
			}, "json");
			$(this.parentNode).html('<img src="http://www.gifde.com/gif/otros/decoracion/cargando-loading/">');
	//   event.preventDefault();
	  }
  }catch{} 
}

//Canción
//Canci&oacute;n




