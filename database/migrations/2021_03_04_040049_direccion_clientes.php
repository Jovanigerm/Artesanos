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
        Schema::create('direccion_clientes', function (Blueprint $table) {
            $table->increments('idDireccion_c');
            $table->integer('idest')->unsigned();
            $table->foreign('idest')->references('idest')->on('municipios');
            $table->integer('idmun')->unsigned();
            $table->foreign('idmun')->references('idmun')->on('municipios');    
            $table->string('Colonia_C',50);
            $table->string('Calle_C',50);
            $table->string('Numero_C',50);
            $table->string('CodigoPostal_C',5);
            $table->string('Referencia',50);
            $table->integer('idclis')->unsigned();
            $table->foreign('idclis')->references('idclis')->on('clientes');    
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
        Schema::drop('direccion_clientes');
    }
}
