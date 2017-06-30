<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Estados')->insert([
            'nombre' => 'Agendada',
        ]);
        DB::table('Estados')->insert([
            'nombre' => 'Confirmada',
        ]);
        DB::table('Estados')->insert([
            'nombre' => 'Anulada',
        ]);
        DB::table('Estados')->insert([
            'nombre' => 'Perdida',
        ]);
        DB::table('Estados')->insert([
            'nombre' => 'Realizada',
        ]);
    }
}
