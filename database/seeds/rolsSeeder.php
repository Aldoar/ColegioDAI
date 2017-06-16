<?php

use Illuminate\Database\Seeder;
use App\Rols;

class rolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$rols = 	[
    			['nombre'=> 'Alumno'],
		    	['nombre' =>'Profesor'],
		    	['nombre' => 'Inspector'],
		    	['nombre' => 'Secretaria'],
		    	['nombre' => 'Director']
		    	];

		DB::table('rols')->delete();
    	foreach ($rols as $rol){
        Rols::create($rol);
    	}
    }
}
