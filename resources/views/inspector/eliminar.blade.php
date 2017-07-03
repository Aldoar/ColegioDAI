<div class="container" id="eliminarUsuario">
   <div class="row">
    <div class="form-horizontal"><br/>
            <!-- Form Name -->
        <legend>&nbsp;&nbsp;<span class="glyphicon glyphicon-floppy-remove"></span>&nbsp;&nbsp;Eliminar Alumno</legend>
        <div class="form-group">
            <label class="col-md-4 control-label" for="rutM">RUT a buscar </label>
            <div class="col-md-4">
                <input id="rutM" name="rutM" placeholder="RUT Alumno" class="form-control input-md" type="text"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="eliminar"></label>
            <div class="col-md-4">
                <a href="#" class="btn btn-primary" id="eliminar" name="eliminar">Buscar <span class="glyphicon glyphicon-search"></span></a>
            </div>
        </div>
    </div>
   </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="eliminarModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Mensaje de Eliminación</h4>
      </div>
      <div class="modal-body">
        <p>¿Seguro elimina Alumno?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnEliminar" class="btn btn-danger">Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
