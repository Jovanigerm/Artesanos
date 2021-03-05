@extends('plantilla')
@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{route('guardarcambiosclientes')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="card-header col-md-10 pr-1">
                    <div class="form-group">
                        <h2 class="title">Modifica cliente</h2>
                    </div>
                </div>
                <div class="col-md-2 pr-1">
                    <div class="form-group">
                        <label>Clave del cliente</label>
                        <input type="text" name="idclie" id="idclie" class="form-control" value="{{ $consulta->idclis }}" readonly style="text-align: center">
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
                  <input type="text" name="Nombre_C" id="Nombre_C" class="form-control" value="{{ $consulta->Nombre_C }}" placeholder="Nombre(s)">
                  @if ($errors->first('Nombre_C'))
                  <p class="text-danger">{{ $errors->first('Nombre_C') }}</p>
                  @endif
                </div>
              </div>
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Apellido paterno</label>
                  <input type="text" name="ApellidoP_C" id="ApellidoP_C" class="form-control" value="{{ $consulta->ApellidoP_C }}" placeholder="Apellido paterno">
                  @if ($errors->first('ApellidoP_C'))
                  <p class="text-danger">{{ $errors->first('ApellidoP_C') }}</p>
                  @endif
                </div>
              </div>
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Apellido Materno</label>
                  <input type="text" name="ApellidoM_C" id="ApellidoM_C" class="form-control" value="{{ $consulta->ApellidoM_C }}" placeholder="Apellido Materno">
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
                        <input type="text" name="Telefono_C" id="Telefono_C" class="form-control" value="{{ $consulta->Telefono_C }}" placeholder="Telefono">
                        @if ($errors->first('Telefono_C'))
                        <p class="text-danger">{{ $errors->first('Telefono_C') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3 pr-1">
                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="FechaNac_C" id="FechaNac_C" value="{{ $consulta->FechaNac_C }}" class="form-control">
                        @if ($errors->first('FechaNac_C'))
                        <p class="text-danger">{{ $errors->first('FechaNac_C') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label>Sexo</label> <br>
                        @if($consulta->Sexo=='H' )
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
                        @else
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="sexo" id="1" value="H"> Masculino
                              <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="sexo" id="2" value="M" checked=""> Femenino
                              <span class="form-check-sign"></span>
                            </label>
                        </div>                            
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="text" name="Correo_C" id="Correo_C" class="form-control" value="{{ $consulta->Correo_C }}" placeholder="Correo">
                        @if ($errors->first('Correo_C'))
                        <p class="text-danger">{{ $errors->first('Correo_C') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pr-1">
                    <button type="submit" value="Guardar" class="btn btn-success col-md-12">Editar</button>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
<script src="/js/municipios.js"></script>
@endsection
