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
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Riego</th>
			<th>Espera</th>
			<th>Ciclos</th>
			<th>Modificar / Borrar</th>
		</thead>
		<tbody>
			@foreach($programas as $programa)
				<tr>
					<td>{{ $programa->id }}</td>
					<td>{{ $programa->nombre }}</td>
					<td>{{ $programa->riego }} min</td>
					<td>{{ $programa->espera }}hs</td>
					<td>{{ $programa->ciclos }}</td>
					<td>
						<a href="{{ route('programas.edit', $programa->id) }}" class="btn btn-warning" style="color:#ffffff"> <span class="glyphicon glyphicon-wrench"></span></a>
						
						<a href="{{ route('programas.destroy', $programa->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $programas->render()!!}
	</div>


					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->


@endsection

