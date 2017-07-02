<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Colegio DAI</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Inicio</a></li>
      <li><a href="{{route('secretariaListarAlumnnos')}}">Listar Alumnos</a></li>
      <li><a href="#">Listar Profesor</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorias
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Agendar Tutoria</a></li>
          <li><a href="#">Confirmar Tutorias</a></li>
          <li><a href="#">Anular Tutorias</a></li>
          <li><a href="#">Modificar Tutorias</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
    </ul>
  </div>
</nav>