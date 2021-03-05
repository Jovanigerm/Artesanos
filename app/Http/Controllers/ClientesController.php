<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;
use App\Models\DireccionClientes;
use App\Models\Municipios;
use App\Models\Estados;
use Session;
class ClientesController extends Controller
{

    public function Municipios($id){
        return Municipios::where('idest', $id)->get();
    }
    public function AltaClientes(){
        $estado=Estados::all();
        $idcliente = Clientes::orderBy('idclis','DESC')->take(1)->get();
        $resgistros= count($idcliente);
        if($resgistros==0){
            $idsiguiente = 1;
        }
        else{
            $idsiguiente = $idcliente[0]->idclis + 1;
        }
        return view('Cliente/up',compact('estado'))
                ->with('idsiguiente',$idsiguiente);
    }
    public function Guardado(Request $request){
        @$this->validate($request,[
            'Nombre_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'ApellidoP_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'ApellidoM_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Telefono_C' => 'required|regex:/^[0-9]{10}$/',
            'FechaNac_C' => 'required',
            'sexo'=>'required',
            'Correo_C' => 'required|email',
            'Contraseña_C' => 'required',
            'Estado'=> 'required',
            'Municipio'=> 'required',
            'CodigoPostal_C' => 'required|regex:/^[0-9]{5}$/',
            'Colonia_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Calle_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Numero_C' => 'required|integer',
            'Referencia' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/'
        ]);
        $cliente = new Clientes;
        $cliente -> idclis = $request->idclie; 
        $cliente -> Nombre_C = $request->Nombre_C;
        $cliente -> ApellidoP_C = $request->ApellidoP_C;    
        $cliente -> ApellidoM_C = $request->ApellidoM_C;    
        $cliente -> Telefono_C = $request->Telefono_C;    
        $cliente -> FechaNac_C = $request->FechaNac_C;    
        $cliente -> Sexo = $request->sexo;    
        $cliente -> Correo_C = $request->Correo_C;    
        $cliente -> Contraseña_C = $request->Contraseña_C;
        $cliente -> save();    
        $direccion = New DireccionClientes;
        $direccion -> idclis = $request->idclie;
        $direccion -> idest = $request->Estado;
        $direccion -> idmun = $request->Municipio;
        $direccion -> CodigoPostal_C = $request->CodigoPostal_C;
        $direccion -> Colonia_C = $request->Colonia_C;
        $direccion -> Calle_C = $request->Calle_C;
        $direccion -> Numero_C = $request->Numero_C;
        $direccion -> Referencia = $request->Referencia;
        $direccion -> save();
        //cambiar la ruta 

        Session::flash('mensaje',"El cliente $request->Nombre_C $request->ApellidoP_C $request->ApellidoM_C se ha guardado correctamente");
        return redirect()->route('reporteclientes');
    }
    public function reporteclientes(){
            $consulta = Clientes::withTrashed()->get();
                return view('Cliente/report')
                    ->with('consulta',$consulta);
    }
    public function desactivaclientes($idclis){
        $cliente = Clientes::find($idclis);
        $cliente ->delete();
        $direccion = DireccionClientes::where('idclis',$idclis);
        $direccion ->delete();
        Session::flash('mensaje',"El cliente $cliente->Nombre_C $cliente->ApellidoP_C $cliente->ApellidoM_C ha sido desactivado correctamente");
        return redirect()->route('reporteclientes');
    }
    public function activaclientes($idclis){
        $cliente = Clientes::withTrashed()->where('idclis',$idclis)->restore();
        $direccion = DireccionClientes::withTrashed()->where('idclis',$idclis)->restore();
        Session::flash('mensaje',"El cliente ha sido activado correctamente");
        return redirect()->route('reporteclientes');
    }
    public function eliminarclientes($idclis){
        $direccion = DireccionClientes::withTrashed()->where('idclis',$idclis)->forceDelete();
        $cliente = Clientes::withTrashed()->find($idclis)->forceDelete();
        Session::flash('mensaje',"El cliente $request->Nombre_C $request->ApellidoP_C $request->ApellidoM_C se ha borrado correctamente");
        return redirect()->route('reporteclientes');
    }
    public function editarclientes($idclis){
        $consulta = Clientes::withTrashed()
        ->where('idclis',$idclis)
        ->get();
        return view('Cliente/edit')
        ->with('consulta',$consulta[0]);
    }
    public function guardadocambios(Request $request){
        @$this->validate($request,[
            'Nombre_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'ApellidoP_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'ApellidoM_C' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'Telefono_C' => 'required|regex:/^[0-9]{10}$/',
            'FechaNac_C' => 'required',
            'sexo'=>'required',
            'Correo_C' => 'required|email',
        ]);
        $cliente = Clientes::find($request->idclie);
        $cliente -> idclis = $request->idclie; 
        $cliente -> Nombre_C = $request->Nombre_C;
        $cliente -> ApellidoP_C = $request->ApellidoP_C;    
        $cliente -> ApellidoM_C = $request->ApellidoM_C;    
        $cliente -> Telefono_C = $request->Telefono_C;    
        $cliente -> FechaNac_C = $request->FechaNac_C;    
        $cliente -> Sexo = $request->sexo;    
        $cliente -> Correo_C = $request->Correo_C;    
        $cliente -> save();    
        //cambiar la ruta 
        Session::flash('mensaje',"Los cambios en el cliente $request->Nombre_C $request->ApellidoP_C $request->ApellidoM_C se ha guardado correctamente");
        return redirect()->route('reporteclientes');
    }
}
