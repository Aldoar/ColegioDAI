@extends('layouts.master')

@section('nav')
	@include('nav.inspector')
@endsection
@show

@section('cuerpo')
	<div class="row-fluid" id="cuerpoInspector">
	 <div id="imagen">
	  <div class="container" >
	    <h1>Bienvenido Inspector</h1>
	    <p style="color:cornflowerblue;">En esta página podrá efectuar sus tareas asignadas</p>
	  </div>
	 </div>
	</div>
@endsection
@show