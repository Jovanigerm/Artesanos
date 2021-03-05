<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idclis');
            $table->string('Nombre_C', 50);
            $table->string('ApellidoP_C', 50);
            $table->string('ApellidoM_C', 50);
            $table->date('FechaNac_C', 50);
            $table->string('Sexo', 1);
            $table->string('Telefono_C', 50);
            $table->string('Correo_C', 50);
            $table->string('Contraseña_C', 50);
            $table->rememberToken();    
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
