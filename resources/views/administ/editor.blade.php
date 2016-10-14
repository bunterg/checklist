@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">{{$cadena->name}} <span class="text-muted"> versión:{{$cadena->versión}}</span></h3>
          </div>
          <div class="panel-body">
            <textarea  class="form-control" rows="3">
              {{$cadena->description}}
            </textarea>
          </div>
          <div class="panel-footer">
             {{ Form::open(['method' => 'DELETE', 'cadena/' => ['Cadena\CadenaController@destroy', $cadena->id]]) }}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
              </button>
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
          </div>
        </div>
	  </div>    
  </div>
</div>
@endsection