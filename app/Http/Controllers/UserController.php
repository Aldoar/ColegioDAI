<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //retorno datos para secretaria
    

    //Retorno de datos en json
    public function listarUserJson()
    {
    	$user = User::All();
    	return $user->toJson();	
    }
    public function listarUserRolJson($rol)
    {
    	$user = User::Where('idRols', $rol)->get();
   		return $user->toJson();
    }
    public function buscarUserRutJson($rut)
    {
    	$user = User::Where('rut', $rut)->first();
    	return $user->toJson();
    }
}
