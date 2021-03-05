<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\DireccionClientes;
use App\Models\Municipios;
use App\Models\Estados;
use Session;
class DireccionesController extends Controller
{
    public function Municipios($id){
        return Municipios::where('idest', $id)->get();
    }
    public function altadirecciones(){
        $estado=Estados::all();
        $cliente = Clientes::all();
        return view('Direcciones/up',compact('estado','cliente'));
    }
    public function Guardado(Request $request){
        @$this->validate($request,[
            'Estado'=> 'required',
            'Municipio'=> 'required',
            'CodigoPostal_C' => 'required|regex:/^[0-9]{5}$/',
            'Colonia_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Calle_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Numero_C' => 'required|integer',
            'Referencia' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/'
        ]);
        $direccion = New DireccionClientes;
        $direccion -> idclis = $request->idclis;
        $direccion -> idest = $request->Estado;
        $direccion -> idmun = $request->Municipio;
        $direccion -> CodigoPostal_C = $request->CodigoPostal_C;
        $direccion -> Colonia_C = $request->Colonia_C;
        $direccion -> Calle_C = $request->Calle_C;
        $direccion -> Numero_C = $request->Numero_C;
        $direccion -> Referencia = $request->Referencia;
        $direccion -> save();
        //cambiar la ruta 
        Session::flash('mensaje',"La dirección se ha guardado correctamente");
        return redirect()->route('reportedirecciones');

    }
    public function reportedirecciones(){
        $consulta = DireccionClientes::withTrashed()
        ->join('estados','estados.idest','=','direccion_clientes.idest')
        ->join('municipios','municipios.idmun','=','direccion_clientes.idmun')
        ->join('clientes','clientes.idclis','=','direccion_clientes.idclis')
        ->select('direccion_clientes.idDireccion_c','direccion_clientes.Colonia_C','direccion_clientes.Calle_C','direccion_clientes.Referencia','direccion_clientes.deleted_at',
                'estados.NombreEstado','municipios.NombreMunicipio',
                'clientes.Nombre_C','clientes.ApellidoP_C','clientes.ApellidoM_C')
        ->get();
            return view('Direcciones/report')
                ->with('consulta',$consulta);
    }
    public function desactivadirecciones($idDireccion_c){
        $direccion = DireccionClientes::find($idDireccion_c);
        $direccion->delete();
        Session::flash('mensaje',"La dirección se ha sido desactivada correctamente");
        return redirect()->route('reportedirecciones');
    }
    public function activadirecciones($idDireccion_c){
        $direccion = DireccionClientes::withTrashed()->where('idDireccion_c',$idDireccion_c)->restore();
        Session::flash('mensaje',"La dirección se ha activado correctamente");
        return redirect()->route('reportedirecciones');
    }
    public function eliminardirecciones($idDireccion_c){
        $direccion = DireccionClientes::withTrashed()->find($idDireccion_c)->forceDelete();
        Session::flash('mensaje',"La dirección ha sido eliminada correctamente");
        return redirect()->route('reportedirecciones');

    }    
    public function editardirecciones($idDireccion_c){
        $consulta = DireccionClientes::withTrashed()
        ->join('estados','estados.idest','=','direccion_clientes.idest')
        ->join('municipios','municipios.idmun','=','direccion_clientes.idmun')
        ->join('clientes','clientes.idclis','=','direccion_clientes.idclis')
        ->select('direccion_clientes.idDireccion_c','direccion_clientes.Colonia_C','direccion_clientes.CodigoPostal_C','direccion_clientes.Calle_C','direccion_clientes.Referencia','direccion_clientes.Numero_C','direccion_clientes.deleted_at',
                'estados.idest','estados.NombreEstado','municipios.idmun','municipios.NombreMunicipio',
                'clientes.idclis','clientes.Nombre_C','clientes.ApellidoP_C','clientes.ApellidoM_C')
        ->where('direccion_clientes.idDireccion_c',$idDireccion_c)
        ->get();
        $cliente = Clientes::all();
        $estado=Estados::all();
        return view('Direcciones/edit')
            ->with('consulta',$consulta[0])
            ->with('cliente',$cliente)
            ->with('estado',$estado);
    }
    public function guardadocambiosdirecc(Request $request){
        @$this->validate($request,[
            'Estado'=> 'required',
            'Municipio'=> 'required',
            'CodigoPostal_C' => 'required|regex:/^[0-9]{5}$/',
            'Colonia_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Calle_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Numero_C' => 'required|integer',
            'Referencia' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/'
        ]);
        $direccion = DireccionClientes::find($request->idDireccion_c);
        $direccion -> idclis = $request->idclis;
        $direccion -> idest = $request->Estado;
        $direccion -> idmun = $request->Municipio;
        $direccion -> CodigoPostal_C = $request->CodigoPostal_C;
        $direccion -> Colonia_C = $request->Colonia_C;
        $direccion -> Calle_C = $request->Calle_C;
        $direccion -> Numero_C = $request->Numero_C;
        $direccion -> Referencia = $request->Referencia;
        $direccion -> save();
        Session::flash('mensaje',"Se han guardado los cambios de la dirección correctamente");
        return redirect()->route('reportedirecciones');
    }
}
