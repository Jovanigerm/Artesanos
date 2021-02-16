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
            <h6 style="text-align: center">Datos relevantes del cliente</h6>            
        <div class="card-body">
          <form action="{{route('guardarclientes')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Nombre(s)</label>
                  <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre') }}" placeholder="Nombre(s)">
                  @if ($errors->first('Nombre'))
                  <p class="text-danger">{{ $errors->first('Nombre') }}</p>
                  @endif
                </div>
              </div>
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Apellido paterno</label>
                  <input type="text" name="Apellido_paterno" id="Apellido_paterno" class="form-control" value="{{ old('Apellido_paterno') }}" placeholder="Apellido paterno">
                  @if ($errors->first('Apellido_paterno'))
                  <p class="text-danger">{{ $errors->first('Apellido_paterno') }}</p>
                  @endif
                </div>
              </div>
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Apellido Materno</label>
                  <input type="text" name="Apellido_materno" id="Apellido_materno" class="form-control" value="{{ old('Apellido_materno') }}" placeholder="Apellido Materno">
                  @if ($errors->first('Apellido_materno'))
                  <p class="text-danger">{{ $errors->first('Apellido_materno') }}</p>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{ old('Telefono') }}" placeholder="Telefono">
                        @if ($errors->first('Telefono'))
                        <p class="text-danger">{{ $errors->first('Telefono') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="Fecha_de_nacimiento" id="Fecha_de_nacimiento" value="{{ old('Fecha_de_nacimiento') }}" class="form-control" placeholder="Fecha_de_nacimiento">
                        @if ($errors->first('Fecha_de_nacimiento'))
                        <p class="text-danger">{{ $errors->first('Fecha_de_nacimiento') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label>Sexo</label> <br>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino" checked=""> Masculino
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                          <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Femenino"> Femenino
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
                        <input type="text" name="Correo" id="Correo" class="form-control" placeholder="Correo" value="{{ old('Correo') }}">
                        @if ($errors->first('Correo'))
                        <p class="text-danger">{{ $errors->first('Correo') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="Contraseña" id="Contraseña" class="form-control" placeholder="Contraseña">
                        @if ($errors->first('Contraseña'))
                        <p class="text-danger">{{ $errors->first('Contraseña') }}</p>
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
                        <select name="Estado" id="Estado" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Municipio</label>
                        <select name="Municipio" id="Municipio" class="form-control">
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
                        <input type="number" min="1" name="Codigo_postal" id="Codigo_postal" class="form-control" value="{{ old('Codigo_postal') }}" placeholder="Codigo postal">
                        @if ($errors->first('Codigo_postal'))
                        <p class="text-danger">{{ $errors->first('Codigo_postal') }}</p>
                        @endif        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Colonia</label>
                        <input type="text" name="Colonia" id="Colonia" class="form-control" value="{{ old('Colonia') }}" placeholder="Colonia">
                        @if ($errors->first('Colonia'))
                        <p class="text-danger">{{ $errors->first('Colonia') }}</p>
                        @endif        
                    </div>    
                </div>
                <div class="col-md-5 pr-1">
                    <div class="form-group">
                        <label>Calle</label>
                        <input type="text" name="Calle" id="Calle" class="form-control" value="{{ old('Calle') }}" placeholder="Calle">
                        @if ($errors->first('Calle'))
                        <p class="text-danger">{{ $errors->first('Calle') }}</p>
                        @endif        
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Numero de casa</label>
                        <input type="number" min="1" name="Numero_de_casa" id="Numero_de_casa" value="{{ old('Numero_de_casa') }}" class="form-control" placeholder="Numero de casa">
                        @if ($errors->first('Numero_de_casa'))
                        <p class="text-danger">{{ $errors->first('Numero_de_casa') }}</p>
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
            <button type="submit" value="Guardar" class="btn btn-success col-md-12">Dar de Alta</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection
