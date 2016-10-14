@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">{{$cadena->name}} <span class="text-muted"> versión:$cadena->version</span></h3>
          </div>
          <div class="panel-body">
            <textarea  class="form-control" rows="3">
              {{$cadena->description}}
            </textarea>
          </div>
          <div class="panel-footer">
            <form method="POST">
              {{ csrf_token() }}
              <input name="_method" type="hidden" value="DELETE">
              <button type="submit" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
              </button>
            </form>
          </div>
        </div>
	  </div>    
  </div>
</div>
@endsection