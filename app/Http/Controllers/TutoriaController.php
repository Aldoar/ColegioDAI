<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutoria;
use App\User;

class TutoriaController extends Controller
{
	public function registrarTutoria(Request $Request)
	{
		$this->validate($request,
			[
			'nombre'=>'required|min:5',
			'fecha' =>'required|date',
			'hora' => 'required',
			]);
	}
	//Json Listar Tutoria
    public function listarCurso()
    {
    	$cursos = Tutoria::All();
    	return $cursos->toJson();
    }
    public function agendarVista()
    {
    	$user = User::Where('idRols', 6)->get();
    	return view('secretaria.Agendar',["users" => $user]);
    }
}