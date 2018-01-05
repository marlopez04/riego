@extends('front.template.main')

@section('content')

<div class="monthly-grid">
	<div class="panel panel-widget">
		<div class="panel-title">
			Valvulas 	  
		</div>
			<div class="panel-body">
				<!-- status -->
				<div class="contain">									
					<div class="col-md-3"></div>

					<div class="col-md-6">
					<a href="{{ route('valvulas.create') }}" class="btn btn-info">Registrar nueva Valvula</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Ultimo Riego</th>
<!--
			<th>Direccion</th>
			<th>Descripcion</th>
			<th>Estado</th>
			<th>Bomba</th>
-->
			<th>Stat</th>
			<th>Zona</th>
			<th>Modificar / Borrar</th>
		</thead>
		<tbody>
			@foreach($valvulas as $valvula)
				<tr>
					<td>{{ $valvula->id }}</td>
					<td>{{ $valvula->nombre }}</td>
					<td>{{ $valvula->ultimoriego }}</td>
<!--
					<td>{{ $valvula->direccion }}</td>
					<td>{{ $valvula->descripcion }}</td>
					<td>{{ $valvula->estado }}</td>
					<td>{{ $valvula->bomba->descripcion }}</td>
-->
					<td>{{ $valvula->stat }}</td>
					<td>{{ $valvula->zonariego->descripcion }}</td>
					<td>
						<a href="{{ route('valvulas.edit', $valvula->id) }}" class="btn btn-warning" style="color:#ffffff"> <span class="glyphicon glyphicon-wrench"></span></a>
						
						<a href="{{ route('valvulas.destroy', $valvula->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $valvulas->render()!!}
	</div>


					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->


@endsection

