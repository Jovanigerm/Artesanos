<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DireccionClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccioncliente', function (Blueprint $table) {
            $table->increments('idDireccion_c');
            $table->integer('idEstado')->unsigned();
            $table->foreign('idEstado')->reference('idEstado')->on('municipios');
            $table->integer('idMunicipio')->unsigned();
            $table->foreign('idMunicipio')->reference('idMunicipio')->on('municipios');    
            $table->string('Colonia_C',50);
            $table->string('Calle_C',50);
            $table->string('Numero_C',50);
            $table->int('CodigoPostal_C',5);
            $table->string('Referencia',50);
            $table->rememberToken();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('direccioncliente');
    }
}
