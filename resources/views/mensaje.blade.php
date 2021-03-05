@extends('plantilla')
@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 pr-2">
                    <div class="form-group">
                    <h1>Proceso de {{ $proceso }}</h1>
                    <div class="alert alert-success">{{ $mensaje }}</div>                            
                    </div>      
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
