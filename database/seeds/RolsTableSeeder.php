<?php

use Illuminate\Database\Seeder;
use App\User;
class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'nombre' => 'Director',
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Inspector',
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Secretaria',
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Alumno',
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Profesor',
        ]);
    }
}
