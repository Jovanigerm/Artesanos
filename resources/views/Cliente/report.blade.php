@extends('plantilla')
@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="card-header col-md-10 pr-1">
                    <div class="form-group">
                        <h2 class="title">Reporte de Clientes</h2>
                    </div>
                </div>
                <div class="col-md-2 pr-3">
                        <a href="{{route('altaclientes')}}">
                            <button type="button" class="btn btn-success">Alta de clientes</button>
                        </a>
                </div>
            </div>
            @if(Session::has('mensaje'))
            <div class="row">
                <div class="card-header col-md-12 pr-1" >
                    <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
                </div>
            </div>
            @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Clave cliente</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Operaciones</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($consulta as $con)
                    <tr>
                        <th scope="row">{{ $con->idclis }}</th>
                        <td>{{ $con->Nombre_C }} {{ $con->ApellidoP_C }} {{ $con->ApellidoM_C }}</td>
                        <td>{{ $con->Sexo }}</td>
                        <td>{{ $con->Telefono_C }}</td>
                        <td>{{ $con->Correo_C }}</td>
                        <td>
                            @if($con->deleted_at)
                            <a href="{{route('activaclientes',['idclis'=> $con->idclis])}}">
                                <button type="button" class="btn btn-warning">Activar</button>
                            </a>
                            <a href="{{route('eliminarclientes',['idclis'=> $con->idclis])}}">
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </a>
                            @else
                            <a href="{{route('editarclientes',['idclis'=> $con->idclis])}}">
                                <button type="button" class="btn btn-info">Modificar</button>
                            </a>
                            <a href="{{route('desactivaclientes',['idclis'=> $con->idclis])}}">
                                <button type="button" class="btn btn-danger">Desactivar</button>
                            </a>
                            @endif
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
@endsection
