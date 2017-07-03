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
})->name('secretariaIndex');
Route::get('/secretaria/registrar/tutoria', 'TutoriaController@agendarVista')->name('secretariaAgendar');
Route::get('/secretaria/listarAlumnos', 'UserController@listarAlumnos')->name('secretariaListarAlumnnos');
/*
|--------------------------------------------------------------------------
| Web Routes Inspector
|--------------------------------------------------------------------------
*/
Route::get('/inspector', function(){
	return view('inspector.index');
<<<<<<< HEAD
});
Route::get('/listarAlumnos', function(){
	return view('inspector.listar');
=======
})->name('indexInspector')->middleware('rols:2');
Route::get('/listarUsuarios', function(){
	return view('inspector.listar')->middleware('rols:2');
>>>>>>> origin/master
});
Route::get('/listarProfesores', function(){
	return view('inspector.listarProfe');
});
Route::get('/listarUsuarios', function(){
	return view('inspector.listadoUsuarios');
});
Route::get('/cargarPaginaAlumno', function(){
	return view('inspector.consulta')->middleware('rols:2');
});
Route::get('/cargarPaginaUsuario', function(){
	return view('inspector.consultaUsuario');
});
Route::get('/cargarPaginaProfesor', function(){
	return view('inspector.consultProf');
});
Route::get('/cargarPaginaEliminar', function(){
	return view('inspector.eliminar')->middleware('rols:2');
});
Route::get('/cargarPaginaEliminarUs', function(){
	return view('inspector.eliminarUsu');
});
Route::get('usuario/eliminar/{rut}','UserController@delete');

Route::get('/cargarPaginaRegistrarAlumnos', function(){
	return view('inspector.registrar');
<<<<<<< HEAD
});
Route::post('/registrarAlumno','UserController@registrarAlumno');
=======
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


>>>>>>> origin/master
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
