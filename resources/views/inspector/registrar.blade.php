
<div class="alert alert-success">
<h5>
	<span class="glyphicon glyphicon-user"></span>Registrar Alumnos
</h5>
</div>
<div class="col-sm-offset-3 col-sm-6">

	
	<div class="form-group">
		<label for="Rut">Rut:</label>
   			<input type="text" name="Rut" class="form-control" id="Rut" placeholder="234567-8" required>
	</div>
	<div class="form-group">
		<label for="name">Nombres:</label>
		<input type="text" name="name" class="form-control" id="name" required>
	</div>
	<div class="form-group">
		<label for="email">Correo:</label>
		<input type="email" name="email" class="form-control" id="email" required>
	</div>
	<div class="form-group">
		<label for="password">Contraseña:</label>
		<input type="password" name="password" class="form-control" id="password" required>
	</div>
	<div class="form-group">
		<label for="curso">Curso:</label>
		<select id="curso" name="curso" class="form-control"></select>
	</div>
	<div class="form-group">
		<label for="direccion">Dirección:</label>
		<input type="text" name="direccion" class="form-control" id="direccion" required>
	</div>
	<div class="form-group">
		<label for="telefono">Teléfono:</label>
		<input type="text" name="telefono" class="form-control" id="telefono" required>
	</div>
	<div class="form-group">
		<label for="celular">Celular:</label>
		<input type="text" name="celular" class="form-control" id="celular" required>
	</div>
	<div class="form-group">
		<button class="btn btn-primary form-control" id="btnRegistra">
			<i class="glyphicon glyphicon-plus"></i>
			Registrar Usuario
		</button>
	</div>

</div>
<div class="modal fade" tabindex="-1" role="dialog" id="eliminarModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Mensaje de Registro</h4>
      </div>
      <div class="modal-body">
        <p id="mensajeModal"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->