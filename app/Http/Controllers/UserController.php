<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    //retorno datos para secretaria
    public function listarAlumnos()
    {
        $user = User::Where('idRols', 4)->get();
        return view('secretaria.listarAlumnos',["users" => $user]);
    }
    public function listarProfesor()
    {
        $user = User::Where('idRols', 5)->get();
        return view('secretaria.listarAlumnos',["users" => $user]);
    }

    //registrar alumno
   /* public function registrarAlumno(Request $request)
    {
        $this->validate($request,[
            'rut'=> 'required|min9'
            'nombre'=> 'required|min:10',
            'password' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'idcurso' => 'required',
            'direccion' =>  'required'
            ]);
        if($request->telefono != "" || $request->celular != "")
        {
            $user = User::create();
            $user->name = $request->name;
            $user->rut = quitarDV($request->name);
            $user->password = bcrypt($request->name);
            $user->email  = $request->email;
            $user->idcurso = $request->curso;
            $user->direccion = Crypt::encrypt($request->direccion);
            $user->idRols = 4;
            $user->save();
            //retorna lo que se hizo, una web, una variable o lo que sea
            //return view('');
        }
        else
        {
            //lo Mismo aquí
        }
        
    }*/

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
        if($user!=null)
    	   return $user->toJson();
        else
            return null;
    }

    public function delete($id) {

        if(User::destroy($id)) {
             return "ok";
        }
    }


    /*private function quitarDV($rut)
    {
        if(strlen($rut) != 10)
        {
            $nRut = str_split();
            return $nRut[0].$nRut[1].$nRut[2].$nRut[3].$nRut[4].$nRut[5]$nRut[6].$nRut[7];
        }
        else
        {
            $nRut = str_split();
            return $nRut[0].$nRut[1].$nRut[2].$nRut[3].$nRut[4].$nRut[5]$nRut[6];
        }
    }
    private function agregar_dv($rut) {

    while($_rol[0] == "0") {
        $_rol = substr($_rol, 1);
    }

    $factor = 2;
    $suma = 0;
    for($i = strlen($_rol) - 1; $i >= 0; $i--) {
        $suma += $factor * $_rol[$i];
        $factor = $factor % 7 == 0 ? 2 : $factor + 1;
    }
    $dv = 11 - $suma % 11;
    $dv = $dv == 11 ? 0 : ($dv == 10 ? "K" : $dv);
    return $dv;

    }*/
}
