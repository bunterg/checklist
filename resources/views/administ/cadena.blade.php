@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Cadena de ejecución</h3>
				</div>
				<div class="panel-body">
					<form class="form-inline" role="form" method="POST" action="{{ url('/cadena') }}">
						{{ csrf_field() }}
						<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
							<label>Nombre</label>
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="nombre" autofocus/>
						</div>
						<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
							<label for="description">Descripción</label>
							<input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="descripción" />
						</div>
						<button class="btn btn-primary btn-sm">Crear</button>
					</form>
					<hr/>
					<div class="input-group">
            <span class="input-group-btn">
              <button class="btn btn-default btn-sm" type="button">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              </button>
            </span>
            <input type="text" class="form-control" placeholder="Buscar...">
          </div><!-- /input-group -->
					<!-- /input-group -->
				</div>
				<!-- Table -->
				<table class="table" id="auto-id-master">
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>descripción</th>
					</tr>
          @foreach ($cadenas as $cadena)
					<tr id="data" onclick="window.document.location='{{ url('/cadena/'.$cadena->id) }}';">
						<th>{{ $cadena->id }}</th>
						<th>{{ $cadena->name }}</th>
						<th>{{ $cadena->description }}</th>
					</tr>
          @endforeach
				</table>
				<div class="panel-footer">
					<div class="btn-group" role="group" aria-label="paginas">
						<button type="button" class="btn btn-default"><</button>
						<button type="button" class="btn btn-default">1</button>
						<button type="button" class="btn btn-default">2</button>
						<button type="button" class="btn btn-default">3</button>
						<button type="button" class="btn btn-default">4</button>
						<button type="button" class="btn btn-default">></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection