@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>{{ $cadena->name }}</strong> <span class="text-muted"> versión: {{ $cadena->version  }}</span></h3>
        </div>
        <div class="panel-body">
          <textarea  class="form-control" rows="3">
            {{ $cadena->description }}
          </textarea>
          <br>
          <button type="submit" class="btn">
            Actualizar
          </button>
        </div>
        <div class="panel-footer">            
          
        </div>
      </div>
      <hr>
      <div>
        <label>
          Desplegar cadena de ejecución, estará disponible para el uso.
        </label>
        <button class="btn btn-primary">
          Desplegar
        </button>
      </div>
      <hr>
      <form method="POST" role="form">
        {{ csrf_field() }}  
        {{ method_field('DELETE') }}
        <div>
          <label>
            Eliminar cadena de ejecución, esto ocultará la version
          </label>
          <button type="submit" class="btn btn-danger">
            Eliminar
          </button>
        </div>
      </form>
	  </div>    
  </div>
</div>
@endsection