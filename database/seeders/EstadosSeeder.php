<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return \DB::table('estados')->insert([
            ["idest" => 1,"NombreEstado" => "Aguascalientes"],
            ["idest" => 2,"NombreEstado" => "Baja California"],
            ["idest" => 3,"NombreEstado" => "Baja California Sur"],
            ["idest" => 4,"NombreEstado" => "Campeche"],
            ["idest" => 5,"NombreEstado" => "Chiapas"],
            ["idest" => 6,"NombreEstado" => "Chihuahua"],
            ["idest" => 7,"NombreEstado" => "Ciudad de México"],
            ["idest" => 8,"NombreEstado" => "Coahuila"],
            ["idest" => 9,"NombreEstado" => "Colima"],
            ["idest" => 10,"NombreEstado" => "Durango"],
            ["idest" => 11,"NombreEstado" => "Guanajuato"],
            ["idest" => 12,"NombreEstado" => "Guerrero"],
            ["idest" => 13,"NombreEstado" => "Hidalgo"],
            ["idest" => 14,"NombreEstado" => "Jalisco"],
            ["idest" => 15,"NombreEstado" => "Estado de México"],
            ["idest" => 16,"NombreEstado" => "Michoacán"],
            ["idest" => 17,"NombreEstado" => "Morelos"],
            ["idest" => 18,"NombreEstado" => "Nayarit"],
            ["idest" => 19,"NombreEstado" => "Nuevo León"],
            ["idest" => 20,"NombreEstado" => "Oaxaca"],
            ["idest" => 21,"NombreEstado" => "Puebla"],
            ["idest" => 22,"NombreEstado" => "Querétaro"],
            ["idest" => 23,"NombreEstado" => "Quintana Roo"],
            ["idest" => 24,"NombreEstado" => "San Luis Potosí"],
            ["idest" => 25,"NombreEstado" => "Sinaloa"],
            ["idest" => 26,"NombreEstado" => "Sonora"],
            ["idest" => 27,"NombreEstado" => "Tabasco"],
            ["idest" => 28,"NombreEstado" => "Tamaulipas"],
            ["idest" => 29,"NombreEstado" => "Tlaxcala"],
            ["idest" => 30,"NombreEstado" => "Veracruz"],
            ["idest" => 31,"NombreEstado" => "Yucatán"],
            ["idest" => 32,"NombreEstado" => "Zacatecas"],


        ]);
    }
}
