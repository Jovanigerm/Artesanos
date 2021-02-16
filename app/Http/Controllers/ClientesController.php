<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function AltaClientes(){
        return view('cliente');
    }
    public function Guardado(Request $request){
        @$this->validate($request,[
            'Nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Apellido_paterno' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Apellido_materno' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Telefono' => 'required|regex:/^[0-9]{10}$/',
            'Fecha_de_nacimiento' => 'required',
            'Correo' => 'required|email',
            'Contraseña' => 'required',
            'Codigo_postal' => 'required|regex:/^[0-9]{5}$/',
            'Colonia' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Calle' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Numero_de_casa' => 'required|integer',
            'Referencia' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/'
        ]);
    }
}
