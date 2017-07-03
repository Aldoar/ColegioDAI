@extends('layouts.master')

@section('nav')
	@include('nav.secretaria')
@endsection
@show

@section('cuerpo')
	<legend>
		<span class="glyphicon glyphicon-list"></span> Agendar Tutoria
	</legend>
	<div class="col-sm-offset-3 col-sm-6">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
		<form>
		{{ csrf_field() }}
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" required class="form-control">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" name="fecha" id="fecha" required class="form-control">
			</div>
			<div class="form-group">
				<label for="hora">Fecha</label>
				<input type="time" name="hora" id="hora" required class="form-control">
			</div>
			<div class="form-group">
				<label for="profesor">Profesor</label>
				<select name="profesor" class="form-control">
					<option value="0">Seleccione un profesor</option>
				@foreach($users as $user)
					<option value="{{ $user->id}}">{{ $user->name }}</option>
				@endforeach
			</select>
			</div>
			<div class="form-group">
				<button class="btn btn-success form-control">Registrar Tutoria</button>
			</div>

		</form>
	</div>
@endsection
@show
