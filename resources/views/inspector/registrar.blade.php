@extends('layouts.master')

@section('nav')
	@include('nav.inspector')
@endsection

@show

@section('cuerpo')
<div class="alert alert-success">
<h5>
	<span class="glyphicon glyphicon-user"></span>Registrar Alumnos
</h5>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-sm-offset-3 col-sm-6">
<form method="post" action="{{ route('guardarUsuario') }}">
	{{ csrf_field() }}
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
		<button class="btn btn-primary form-control">
			<i class="glyphicon glyphicon-plus"></i>
			Registrar Usuario
		</button>
	</div>
</form>
</div>
@endsection
@show