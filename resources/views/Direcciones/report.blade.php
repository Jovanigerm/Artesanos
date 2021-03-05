@extends('plantilla')
@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="card-header col-md-10 pr-1">
                    <div class="form-group">
                        <h2 class="title">Reporte de direcciones</h2>
                    </div>
                </div>
                <div class="col-md-2 pr-3">
                        <a href="{{route('altadirecciones')}}">
                            <button type="button" class="btn btn-success">Alta de Direcciones</button>
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
                        <th scope="col">Estado</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Colonia</th>
                        <th scope="col">Calle</th>
                        <th scope="col">Referencia</th>
                        <th scope="col">Nombre del Cliente</th>
                        <th scope="col">Operaciones</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($consulta as $con)
                    <tr>
                        <th scope="row">{{ $con->NombreEstado }}</th>
                        <td>{{ $con->NombreMunicipio }}</td>
                        <td>{{ $con->Colonia_C }}</td>
                        <td>{{ $con->Calle_C }}</td>
                        <td>{{ $con->Referencia }}</td>
                        <td>{{ $con->Nombre_C }} {{ $con->ApellidoP_C }} {{ $con->ApellidoM_C }}</td>
                        <td>
                            @if($con->deleted_at)
                            <a href="{{route('activadirecciones',['idDireccion_c'=> $con->idDireccion_c])}}">
                                <button type="button" class="btn btn-warning">Activar</button>
                            </a>
                            <a href="{{route('eliminardirecciones',['idDireccion_c'=> $con->idDireccion_c])}}">
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </a>
                            @else
                            <a href="{{route('editardirecciones',['idDireccion_c'=> $con->idDireccion_c])}}">
                                <button type="button" class="btn btn-info">Modificar</button>
                            </a>
                            <a href="{{route('desactivadirecciones',['idDireccion_c'=> $con->idDireccion_c])}}">
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
