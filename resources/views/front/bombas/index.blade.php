@extends('front.template.main')

@section('content')

<div class="monthly-grid">
	<div class="panel panel-widget">
		<div class="panel-title">
			RIEGO 	  
		</div>
			<div class="panel-body">
				<!-- status -->
				<div class="contain">									
					<div class="col-md-3"></div>

					<div class="col-md-6">
					<a href="{{ route('bombas.create') }}" class="btn btn-info">Registrar nueva Bomba</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>ZonaRiego</th>
			<th>Modificar / Borrar</th>
		</thead>
		<tbody>
			@foreach($bombas as $bomba)
				<tr>
					<td>{{ $bomba->id }}</td>
					<td>{{ $bomba->nombre }}</td>
					<td>{{ $bomba->direccion }}</td>
					<td>{{ $bomba->zonariego->descripcion }}</td>
					<td>
						<a href="{{ route('bombas.edit', $bomba->id) }}" class="btn btn-warning" style="color:#ffffff"> <span class="glyphicon glyphicon-wrench"></span></a>
						
						<a href="{{ route('bombas.destroy', $bomba->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $bombas->render()!!}
	</div>


					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->


@endsection

