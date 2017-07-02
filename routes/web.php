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
Route::get('/listarUsuarios', function(){
	return view('inspector.listar');
});
Route::get('/cargarPaginaAlumno', function(){
	return view('inspector.consulta');
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
