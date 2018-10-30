@extends('plantilla.origen')
@section("contenido")
	<table id = "tabla" class="table table-hover" border="1"  >
		<thead class="thead-dark">
      <th>ID</th>      
			<th>NOMBRE</th>
			<th>APELLIDOS</th>
		</thead>
		<tbody>
	@foreach($todos as $cadauno)
			<tr id = "{{$cadauno->id}}">
        <td class="col_id">{{$cadauno->id}}</td>
				<td class="col_nombre">{{$cadauno->nombre}}</td>
				<td class="col_appellido">{{$cadauno->apellidos}}</td>
			</tr>
	@endforeach
		</tbody>
	</table>

 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Agregar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="container">
  <form>
  	@csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">NOMBRE</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="texto_nom" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">APELLIDO</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="texto_app" placeholder="Apellido">
      </div>
    </div>
  </form>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button id="otro"  class="btn btn-primary">otro</button>
        <button type="button">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section("titulo")
	PRUEBA 8
@endsection
@section("js")
	<script src="/funciones.js"></script>
	<script>
		$( document ).ready( 	 function (){
			$('#otro').click( agregafila );
      $('#tabla').on("dblclick", ".col_nombre", editarnombre );
      $('#tabla').on("dblclick", ".col_appellido", editarapellido );
      $('#tabla').on("keydown", ".input_nombre", teclazonombre );
      $('#tabla').on("dblclick", ".col_id", borrar );

	});

	</script>

@endsection