<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('principal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/salir', 'UserController@salir')->name('salir');


/*
|--------------------------------------------------------------------------
| Web Routes Secretaria
|--------------------------------------------------------------------------
*/
Route::get('/secretaria', function(){
	return view('secretaria.index');
});
Route::get('/secretaria/listarAlumnos', 'UserController@listarAlumnos')->name('secretariaListarAlumnnos');
/*
|--------------------------------------------------------------------------
| Web Routes Inspector
|--------------------------------------------------------------------------
*/
Route::get('/inspector', function(){
	return view('inspector.index');
})->name('indexInspector')->middleware('rols:2');
Route::get('/listarUsuarios', function(){
	return view('inspector.listar')->middleware('rols:2');
});
Route::get('/cargarPaginaAlumno', function(){
	return view('inspector.consulta')->middleware('rols:2');
});
Route::get('/cargarPaginaEliminar', function(){
	return view('inspector.eliminar')->middleware('rols:2');
});
Route::get('usuario/eliminar/{rut}','UserController@delete');
Route::get('/inspector/registrar/alumnos', function(){
	return view('inspector.registrar');
})->name('registarAlumnos')->middleware('rols:2');
Route::post('/inspector/registrarAlumno',
	'UserController@registrarAlumno')->name('guardarUsuario')->middleware('rols:2');

/*
|--------------------------------------------------------------------------
| Web Routes Director
|--------------------------------------------------------------------------
*/

Route::get('/director', function(){
	return view('director.index');
})->name('indexDirector')->middleware('rols:2');
Route::get('/listarUsuarios', function(){
	return view('director.listar')->middleware('rols:2');
});
Route::get('/cargarPaginaAlumno', function(){
	return view('director.consulta')->middleware('rols:2');
});


/*
|--------------------------------------------------------------------------
| API Routes 
|--------------------------------------------------------------------------
*/
//Listar usuarios
Route::get('/api/Users', 'UserController@listarUserJson');
//Buscar usuarios por rut
Route::get('/api/Users/buscar/{rut}', 'UserController@buscarUserRutJson');
//Listar usuarios por rol
Route::get('/api/Users/Rol/{rol}' , 'UserController@listarUserRolJson');
//Listar Rol
Route::get('/api/Rols', 'RolController@listarRol');
//Listar Estados
Route::get('/api/Estados', 'EstadoController@listarEstado');
//listar Cursos
Route::get('/api/Cursos', 'TutoriaController@listarCurso');

Route::get('/api/TutoriaUser', 'tutoriauserController@listarCurso');
