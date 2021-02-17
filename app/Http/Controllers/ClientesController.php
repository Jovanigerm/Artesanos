<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\DireccionClientes;

class ClientesController extends Controller
{
    public function AltaClientes(){
        return view('cliente');
    }
    public function Guardado(Request $request){
        @$this->validate($request,[
            'Nombre_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'ApellidoP_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'ApellidoM_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Telefono_C' => 'required|regex:/^[0-9]{10}$/',
            'FechaNac_C' => 'required',
            'Sexo'=>'required',
            'Correo_C' => 'required|email',
            'Contraseña_C' => 'required',
            'idEstado'=> 'required',
            'idMunicipio'=> 'required',
            'CodigoPostal_C' => 'required|regex:/^[0-9]{5}$/',
            'Colonia_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Calle_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Numero_C' => 'required|integer',
            'Referencia' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/'
        ]);
    }

}
