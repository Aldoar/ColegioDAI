<div class="container" id="modificaUsuario">
    <div class="row">
        <div class="form-horizontal"><br/>
            <!-- Form Name -->
            <legend>&nbsp;&nbsp;<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Consultar Alumno</legend>
            <div class="form-group">
                <label class="col-md-4 control-label" for="rutM">RUT a buscar </label>
                <div class="col-md-4">
                    <input id="rutM" name="rutM" placeholder="RUT Alumno" class="form-control input-md" type="text"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="buscar"></label>
                <div class="col-md-4">
                    <a href="#" class="btn btn-primary" id="buscar" name="buscar">Buscar <span class="glyphicon glyphicon-search"></span></a>
                </div>
            </div>
        </div>
        <div class="container hidden" id="cuerpoBuscar">
            <div class="form-horizontal table" id="listarAlumno">                  
                <div class="table" style="max-width: 97%;">
                    <a href="inspector" class=" btn btn-info" type="button">Volver</a><hr/>
                    <table id="table_id" class="table table-bordered table-sm m-4 table-striped table-hover" >
                        <tr>
                            <th class="success">RUT Alumno&nbsp;&nbsp;&nbsp;</th>
                            <th class="success">Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th class="success">Curso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>                
                            <th class="success">Fecha Nacimiento&nbsp;&nbsp;</th>
                            <th class="success">Dirección&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th class="success">Teléfono&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th class="success">Celular&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th class="success">Email&nbsp;&nbsp;</th>
                        </tr>
                    </table>
                </div>    
            </div>
        </div>
    </div>

</div>
