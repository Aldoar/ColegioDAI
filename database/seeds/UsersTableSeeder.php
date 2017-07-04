<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
        DB::table('users')->insert([
            'name' => 'Director',
            'email' => 'director@tester.cl',
            'password' => bcrypt('1234'),
            'idRols'=> 1,
            'rut' => 13072627
        ]);
        DB::table('users')->insert([
            'name' => 'inspector',
            'email' => 'inspector@tester.cl',
            'password' => bcrypt('1234'),
            'idRols'=> 2,
            'rut' => 13072627
        ]);
        DB::table('users')->insert([
            'name' => 'Secretaria',
            'email' => 'secretaria@tester.cl',
            'password' => bcrypt('1234'),
            'idRols'=> 3,
            'rut' => 13072627
        ]);
        DB::table('users')->insert([
            'name' => 'Alumno',
            'email' => 'alumno@tester.cl',
            'password' => bcrypt('1234'),
            'idRols'=> 4,
            'rut' => 13072627
        ]);
        DB::table('users')->insert([
            'name' => 'Profesor',
            'email' => 'profesor@tester.cl',
            'password' => bcrypt('1234'),
            'idRols'=> 5,
            'rut' => 13072627
        ]);
    }
}
