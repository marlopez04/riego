@extends('front.template.main')

@section('content')

<div class="monthly-grid">
	<div class="panel panel-widget">
		<div class="panel-title">
			Bombas 	  
		</div>
			<div class="panel-body">
				<!-- status -->
				<div class="contain">									
					<div class="col-md-3"></div>

					<div class="col-md-6">
	{!! Form::open(['route' => ['bombas.update', $bomba], 'method' => 'PUT']) !!}
		<div class="form-group">
			<h4>Nombre</h4>
			{!! Form::text('nombre',$bomba->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre del articulo', 'required'])!!}
		</div>

		<div class="form-group">
			<h4>Descripcion</h4>
			{!! Form::text('direccion',$bomba->direccion, ['class' => 'form-control', 'placeholder' => 'Nombre del articulo', 'required'])!!}
		</div>

		<div class="form-group">
		<h4>Stat</h4>
		<h5>Offline / Online</h5>
			{!! Form::select('stat', ['offline' => 'offline', 'online' => 'online'], $bomba->stat, ['class'=> 'tipo'])!!}
		</div>


		<div class="form-group">
			<h4>Descripcion</h4>
			{!! Form::textarea('descripcion', $bomba->descripcion, ['class' => 'form-control', 'placeholder' => 'Nombre del articulo', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::select('zonariego_id',$zonas, $bomba->zonariego_id, ['class' => 'form-control select-category']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Guardar Programa',['class' => 'btn btn-success btn-lg btn-block', 'style'=>'color:#ffffff']) !!}
		</div>
		

	{!! Form::close() !!}

					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->


@endsection

