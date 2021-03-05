@extends('plantilla')
@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{route('guardarclientes')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="card-header col-md-10 pr-1">
                    <div class="form-group">
                        <h2 class="title">Alta de clientes</h2>
                    </div>
                </div>
                <div class="col-md-2 pr-1">
                    <div class="form-group">
                        <label>Clave del cliente</label>
                        <input type="text" name="idclie" id="idclie" class="form-control" value="{{ $idsiguiente }}" readonly style="text-align: center">
                      </div>      
                </div>
            </div>
            <div class="dropdown-divider"></div>            
            <div class="dropdown-divider"></div>
            <h6 style="text-align: center">Datos relevantes del cliente</h6>            
            <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Nombre(s)</label>
                  <input type="text" name="Nombre_C" id="Nombre_C" class="form-control" value="{{ old('Nombre_C') }}" placeholder="Nombre(s)">
                  @if ($errors->first('Nombre_C'))
                  <p class="text-danger">{{ $errors->first('Nombre_C') }}</p>
                  @endif
                </div>
              </div>
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Apellido paterno</label>
                  <input type="text" name="ApellidoP_C" id="ApellidoP_C" class="form-control" value="{{ old('ApellidoP_C') }}" placeholder="Apellido paterno">
                  @if ($errors->first('ApellidoP_C'))
                  <p class="text-danger">{{ $errors->first('ApellidoP_C') }}</p>
                  @endif
                </div>
              </div>
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Apellido Materno</label>
                  <input type="text" name="ApellidoM_C" id="ApellidoM_C" class="form-control" value="{{ old('ApellidoM_C') }}" placeholder="Apellido Materno">
                  @if ($errors->first('ApellidoM_C'))
                  <p class="text-danger">{{ $errors->first('ApellidoM_C') }}</p>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" name="Telefono_C" id="Telefono_C" class="form-control" value="{{ old('Telefono_C') }}" placeholder="Telefono">
                        @if ($errors->first('Telefono_C'))
                        <p class="text-danger">{{ $errors->first('Telefono_C') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="FechaNac_C" id="FechaNac_C" value="{{ old('FechaNac_C') }}" class="form-control">
                        @if ($errors->first('FechaNac_C'))
                        <p class="text-danger">{{ $errors->first('FechaNac_C') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label>Sexo</label> <br>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="sexo" id="1" value="H" checked=""> Masculino
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                          <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="sexo" id="2" value="M"> Femenino
                              <span class="form-check-sign"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="text" name="Correo_C" id="Correo_C" class="form-control" value="{{ old('Correo_C') }}" placeholder="Correo">
                        @if ($errors->first('Correo_C'))
                        <p class="text-danger">{{ $errors->first('Correo_C') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="Contraseña_C" id="Contraseña_C" class="form-control" placeholder="Contraseña">
                        @if ($errors->first('Contraseña_C'))
                        <p class="text-danger">{{ $errors->first('Contraseña_C') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="dropdown-divider"></div>            
            <div class="dropdown-divider"></div>
            <h6 style="text-align: center">Datos de direccion</h6>
            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Estado</label>
                        <select name="Estado" id="idest" class="form-control">
                            <option value="">--Selecciona--</option>
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
                            <option value="">--Selecciona--</option>
                        </select>
                        @if ($errors->first('Estado'))
                        <p class="text-danger">{{ $errors->first('Estado') }}</p>
                        @endif                        
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
<script src="/js/municipios.js"></script>
@endsection
