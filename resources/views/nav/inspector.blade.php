<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Colegio DAI</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Operaciones : </a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alumno
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="alumn">
          <li><a href="#" id="listarAlu">Listar  Alumnos</a></li>
          <li><a href="#" id="consultarAlu">Consultar Alumno</a></li>
          <li><a href="{{route('registarAlumnos')}}" id="registrarAlu">Registrar Alumno</a></li>
          <li><a href="#" id="eliminarAlu">Eliminar Alumno</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profesor
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="profe">
          <li><a href="#" id="listarProf">Listar  Profesores</a></li>
          <li><a href="#" id="consultarProf">Consultar Profesor</a></li>
          <li><a href="#" id="contratarProf">Contratar Profesor</a></li>
          <li><a href="#" id="despedirProf">Despedir Profesor</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuario
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="usuar">
          <li><a href="#" id="listarUsu">Listar  Usuarios</a></li>
          <li><a href="#" id="consultarUsu">Consultar Usuario</a></li>
          <li><a href="#" id="registrarUsu">Registrar Usuario</a></li>
          <li><a href="#" id="eliminarUsu">Eliminar Usuario</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
    </ul>
  </div>
</nav>