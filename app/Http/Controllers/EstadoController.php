<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{
    //
    public function listarEstado()
    {
    	$estado = Estado::All();
    	return $estado->toJson();
    }
}
