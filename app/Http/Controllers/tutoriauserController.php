<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tutoriauser;

class tutoriauserController extends Controller
{
    public function listarCurso()
    {
    	$cursos = tutoriauser::All();
    	return $cursos->toJson();
    }
}