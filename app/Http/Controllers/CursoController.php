<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    //
    public function listarCurso()
    {
    	$cursos = Curso::All();
    	return $cursos->toJson();
    }
}







