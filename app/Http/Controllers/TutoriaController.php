<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutoria;

class TutoriaController extends Controller
{
    public function listarCurso()
    {
    	$cursos = Tutoria::All();
    	return $cursos->toJson();
    }
}