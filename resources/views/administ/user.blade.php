@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Usuarios</h3>
          </div>
          <div class="panel-body">
          </div>
          <table class="table" id="auto-id-master">
					<tr>
						<th>Nombre</th>
            <th>Correo</th>
					</tr>
          @foreach ($users as $user)
					<tr id="data">
            <th>{{ $user->name }}</th>
						<th>{{ $user->email }}</th>
					</tr>
          @endforeach
				</table>
      </div>
    </div>
	</div>
</div>
@endsection