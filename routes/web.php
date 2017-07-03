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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


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
});
Route::get('/listarAlumnos', function(){
	return view('inspector.listar');
});
Route::get('/listarProfesores', function(){
	return view('inspector.listarProfe');
});
Route::get('/listarUsuarios', function(){
	return view('inspector.listadoUsuarios');
});
Route::get('/cargarPaginaAlumno', function(){
	return view('inspector.consulta');
});
Route::get('/cargarPaginaUsuario', function(){
	return view('inspector.consultaUsuario');
});
Route::get('/cargarPaginaProfesor', function(){
	return view('inspector.consultProf');
});
Route::get('/cargarPaginaEliminar', function(){
	return view('inspector.eliminar');
});
Route::get('/cargarPaginaEliminarUs', function(){
	return view('inspector.eliminarUsu');
});
Route::get('usuario/eliminar/{rut}','UserController@delete');

Route::get('/cargarPaginaRegistrarAlumnos', function(){
	return view('inspector.registrar');
});
Route::post('/registrarAlumno','UserController@registrarAlumno');
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
