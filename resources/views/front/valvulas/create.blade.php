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
	{!! Form::open(['route' => 'valvulas.store', 'method' => 'POST', 'files' => true]) !!}
		<div class="form-group">
			<h4>Nombre</h4>
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la valvula', 'required'])!!}
		</div>
		<div class="form-group">
			<h4>Direccion</h4>
			{!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Direccion de arduino', 'required'])!!}
		</div>

		<div class="form-group">
		<h4>Stat</h4>
		<h5>Offline / Online</h5>
			{!! Form::select('stat', ['offline' => 'offline', 'online' => 'online'], null, ['class'=> 'tipo'])!!}
		</div>
		
		<div class="form-group">
			<h4>Descripcion</h4>
			{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Nombre del articulo', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::select('bomba_id', $bombas, null, ['class' => 'form-control select-category']) !!}
		</div>

		<div class="form-group">
			{!! Form::select('zonariego_id', $zonas, null, ['class' => 'form-control select-category']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Guardar Valvula',['class' => 'btn btn-success btn-lg btn-block', 'style'=>'color:#ffffff']) !!}
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

