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
					<a href="{{ route('riegohistorial.create') }}" class="btn btn-info">Registrar nuevo Riego</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>zona</th>
			<th>valvula</th>
			<th>programa</th>
			<th>Modificar / Borrar</th>
		</thead>
		<tbody>
			@foreach($riegos as $riegohistorial)
				<tr>
					<td>{{ $riegohistorial->id }}</td>
					<td>{{ $riegohistorial->zonariego->descripcion }}</td>
					<td>{{ $riegohistorial->valvula->nombre }}</td>
					<td>R = {{ $riegohistorial->programa->riego }} min, <br>E = {{ $riegohistorial->programa->horas_e }}:{{ $riegohistorial->programa->minutos_e }}, <br>Ciclos = {{ $riegohistorial->programa->ciclos }} </td>
					<td>
						<a href="{{ route('riegohistorial.edit', $riegohistorial->id) }}" class="btn btn-warning" style="color:#ffffff"> <span class="glyphicon glyphicon-wrench"></span></a>
						
						<a href="{{ route('riegohistorial.destroy', $riegohistorial->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $riegos->render()!!}
	</div>


					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->


@endsection

