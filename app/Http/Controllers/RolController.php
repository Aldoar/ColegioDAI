<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
    public function listarRol()
    {
    	$rol = Rol::All();
    	return $rol->toJson();
    }
}
