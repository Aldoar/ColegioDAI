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
})->name('secretariaIndex')->middleware('rols:3');
Route::get('/secretaria/registrar/tutoria', 'TutoriaController@agendarVista')->name('secretariaAgendar')->middleware('rols:3');
Route::get('/secretaria/listarAlumnos', 'UserController@listarAlumnos')->name('secretariaListarAlumnnos')->middleware('rols:3');
/*
|--------------------------------------------------------------------------
| Web Routes Inspector
|--------------------------------------------------------------------------
*/
Route::get('/inspector', function(){
	return view('inspector.index');
})->name('indexInspector')->middleware('rols:2');
Route::get('/listarAlumnos', function(){
	return view('inspector.listar');
})->middleware('rols:2');
Route::get('/listarUsuarios', function(){
	return view('inspector.listar');
})->middleware('rols:2');
Route::get('/listarProfesores', function(){
	return view('inspector.listarProfe');
})->middleware('rols:2');
Route::get('/listarUsuarios', function(){
	return view('inspector.listadoUsuarios');
})->middleware('rols:2');
Route::get('/cargarPaginaAlumno', function(){
	return view('inspector.consulta');
})->middleware('rols:2');
Route::get('/cargarPaginaUsuario', function(){
	return view('inspector.consultaUsuario');
})->middleware('rols:2');
Route::get('/cargarPaginaProfesor', function(){
	return view('inspector.consultProf');
})->middleware('rols:2');
Route::get('/cargarPaginaEliminar', function(){
	return view('inspector.eliminar');
})->middleware('rols:2');
Route::get('/cargarPaginaEliminarUs', function(){
	return view('inspector.eliminarUsu');
})->middleware('rols:2');
Route::get('usuario/eliminar/{rut}','UserController@delete')->middleware('rols:2');

Route::get('/cargarPaginaRegistrarAlumnos', function(){
	return view('inspector.registrar');
})->middleware('rols:2');
Route::post('/registrarAlumno','UserController@registrarAlumno')->name('registarAlumnos')->middleware('rols:2');
Route::post('/inspector/registrarAlumno',
	'UserController@registrarAlumno')->name('guardarUsuario')->middleware('rols:2');

/*
|--------------------------------------------------------------------------
| Web Routes Director
|--------------------------------------------------------------------------
*/

Route::get('/director', function(){
	return view('director.index');
})->name('indexDirector')->middleware('rols:1');
Route::get('/listarUsuarios', function(){
	return view('director.listar')->middleware('rols:1');
});
Route::get('/cargarPaginaAlumno', function(){
	return view('director.consulta')->middleware('rols:1');
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
