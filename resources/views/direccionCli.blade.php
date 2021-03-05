@extends('plantilla')
@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Alta de clientes</h5>
        </div>
            <div class="dropdown-divider"></div>            
            <div class="dropdown-divider"></div>
            <h6 style="text-align: center">Datos de direccion</h6>            
        <div class="card-body">
          <form action="{{route('guardarclientes')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Estado</label>
                        <select name="Estado" id="idEstado" class="form-control">
                            <option value="">--Selecciona--</option>
                            @foreach($estado as $es)
                            <option value="{{$es['idest']}}">{{$es['NombreEstado']}}</option>
                            @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Municipio</label>
                        <select name="Municipio" id="idMunicipio" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Codigo postal</label>
                        <input type="number" min="1" name="CodigoPostal_C" id="CodigoPostal_C" class="form-control" value="{{ old('CodigoPostal_C') }}" placeholder="Codigo postal">
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
                        <input type="text" name="Colonia_C" id="Colonia_C" class="form-control" value="{{ old('Colonia_C') }}" placeholder="Colonia">
                        @if ($errors->first('Colonia_C'))
                        <p class="text-danger">{{ $errors->first('Colonia_C') }}</p>
                        @endif        
                    </div>    
                </div>
                <div class="col-md-5 pr-1">
                    <div class="form-group">
                        <label>Calle</label>
                        <input type="text" name="Calle_C" id="Calle_C" class="form-control" value="{{ old('Calle_C') }}" placeholder="Calle">
                        @if ($errors->first('Calle_C'))
                        <p class="text-danger">{{ $errors->first('Calle_C') }}</p>
                        @endif        
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Numero de casa</label>
                        <input type="number" min="1" name="Numero_C" id="Numero_C" value="{{ old('Numero_C') }}" class="form-control" placeholder="Numero de casa">
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
                        <input type="text" name="Referencia" id="Referencia" class="form-control" value="{{ old('Referencia') }}" placeholder="Referencia">
                        @if ($errors->first('Referencia'))
                        <p class="text-danger">{{ $errors->first('Referencia') }}</p>
                        @endif
                    </div>
                </div>
            </div>    
            <div class="row">
                <div class="col-md-12 pr-1">
                    <button type="submit" value="Guardar" class="btn btn-success col-md-12">Dar de Alta</button>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection
