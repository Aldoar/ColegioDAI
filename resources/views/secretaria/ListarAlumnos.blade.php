@extends('layouts.master')

@section('nav')
	@include('nav.secretaria')
@endsection
@show

@section('cuerpo')
	<legend>
		<span class="glyphicon glyphicon-list"></span> Listar Alumnos
	</legend>
	@if($users->count() != 0)
		<div class="table">
		<table class="table table-responsive table-bordered table-striped table-hover">
			<tr>
				<th>Rut</th>
				<th>Nombre</th>
			</tr>
			@foreach($users as $user)
				<tr>
					<td>{{$user->rut}}</td>
					<td>{{$user->name}}</td>
				</tr>
			@endforeach
		</table>
	</div>
	@else
		<div class="alert alert-info"><h2>
		<span class="glyphicon glyphicon-remove"></span> No hay datos</h2></div>
	@endif
@endsection
@show
