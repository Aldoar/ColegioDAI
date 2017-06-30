<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('idRols')->on('rols');
            $table->string('rut', 8);
            $table->date('fechaNacimiento');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('celular');
            $table->date('fechaContratacion');
            $table->integer('valorTutoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
