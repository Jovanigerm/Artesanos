<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Municipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('municipios', function (Blueprint $table) {
          $table->increments('idMunicipio');
          $table->string('NombreMunicipio', 50);
          $table->integer('idEstado')->unsigned();
          $table->foreign('idEstado')->reference('idEstado')->on('estados');
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
        Schema::drop('municipios');
    }
}
