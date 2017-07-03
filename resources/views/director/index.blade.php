@extends('layouts.master')

@section('nav')
	@include('nav.director')
@endsection
@show

@section('cuerpo')
	<div class="row-fluid" id="cuerpoDirector">
	 <div id="imagen">
	  <div class="container" >
	    <h1>Bienvenido Director</h1>
	    <p style="color:cornflowerblue;">En esta página podrá efectuar sus tareas asignadas</p>
	  </div>
	 </div>
	</div>
@endsection
@show