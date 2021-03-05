@extends('plantilla')
@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{route('guardarcambiosdirecciones')}}" method="POST">
            {{ csrf_field() }}
            <h6 style="text-align: center">Datos de direccion</h6>
            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Cliente</label>
                        <select name="idclis" id="idclis" class="form-control">
                            <option value="{{$consulta->idclis}}">{{$consulta->Nombre_C}} {{$consulta->ApellidoP_C}} {{$consulta->ApellidoM_C}}</option>
                            @foreach($cliente as $cli)
                                <option value="{{$cli->idclis}}">{{$cli->Nombre_C}} {{$cli->ApellidoP_C}} {{$cli->ApellidoM_C}}</option>
                            @endforeach
                        </select>
                      </div>      
                </div>
                <div class="col-md-2 pr-1">
                    <div class="form-group">
                        <label>No.Direccion</label>
                        <input type="text" name="idDireccion_c" id="idDireccion_c" class="form-control" value="{{ $consulta->idDireccion_c }}" readonly style="text-align: center">
                      </div>      
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Estado</label>
                        <select name="Estado" id="idest" class="form-control">
                            <option value="{{ $consulta->idest }}">{{ $consulta->NombreEstado}}</option>
                            @foreach($estado as $es)
                            <option value="{{$es['idest']}}">{{$es['NombreEstado']}}</option>
                            @endforeach
                        </select>
                        @if ($errors->first('Estado'))
                        <p class="text-danger">{{ $errors->first('Estado') }}</p>
                        @endif      
                    </div>
                </div>
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Municipio</label>
                        <select name="Municipio" id="idmuni" class="form-control">
                            <option value="{{ $consulta->idmun }}">{{ $consulta->NombreMunicipio }}</option>
                        </select>
                        @if ($errors->first('Municipio'))
                        <p class="text-danger">{{ $errors->first('Municipio') }}</p>
                        @endif                        
                    </div>
                </div>
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Codigo postal</label>
                        <input type="number" min="1" name="CodigoPostal_C" id="CodigoPostal_C" class="form-control" value="{{ $consulta->CodigoPostal_C }}" placeholder="Codigo postal">
                        @if ($errors->first('CodigoPostal_C'))
                        <p class="text-danger">{{ $errors->first('CodigoPostal_C') }}</p>
                        @endif        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Colonia</label>
                        <input type="text" name="Colonia_C" id="Colonia_C" class="form-control" value="{{ $consulta->Colonia_C }}" placeholder="Colonia">
                        @if ($errors->first('Colonia_C'))
                        <p class="text-danger">{{ $errors->first('Colonia_C') }}</p>
                        @endif        
                    </div>    
                </div>
                <div class="col-md-5 pr-1">
                    <div class="form-group">
                        <label>Calle</label>
                        <input type="text" name="Calle_C" id="Calle_C" class="form-control" value="{{ $consulta->Calle_C }}" placeholder="Calle">
                        @if ($errors->first('Calle_C'))
                        <p class="text-danger">{{ $errors->first('Calle_C') }}</p>
                        @endif        
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Numero de casa</label>
                        <input type="number" min="1" name="Numero_C" id="Numero_C" value="{{ $consulta->Numero_C }}" class="form-control" placeholder="Numero de casa">
                        @if ($errors->first('Numero_C'))
                        <p class="text-danger">{{ $errors->first('Numero_C') }}</p>
                        @endif        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pr-1">
                    <div class="form-group">
                        <label>Referencia</label>
                        <input type="text" name="Referencia" id="Referencia" class="form-control" value="{{ $consulta->Referencia }}" placeholder="Referencia">
                        @if ($errors->first('Referencia'))
                        <p class="text-danger">{{ $errors->first('Referencia') }}</p>
                        @endif
                    </div>
                </div>
            </div>    
            <div class="row">
                <div class="col-md-12 pr-1">
                    <button type="submit" value="Guardar" class="btn btn-success col-md-12">Guardar</button>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
<script src="/js/municipios.js"></script>
@endsection
