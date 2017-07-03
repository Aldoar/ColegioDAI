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
            'name' => 'alumno Prueba1',
            'email' => 'alumno1@tester.cl',
            'password' => bcrypt('1234'),
            'idRols'=> 4,
            'rut' => 13072627
        ]);
    }
}
