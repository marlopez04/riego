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
	{!! Form::open(['route' => 'programas.store', 'method' => 'POST', 'files' => true]) !!}
		<div class="form-group">
			<h4>Nombre</h4>
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del articulo', 'required'])!!}
		</div>
		<div class="form-group">
		<h4>Tiempo de Riego</h4>
       		{!! Form::select('horas', ['00' => 00, '01' => 01], null, ['class'=> 'tipo'])!!}

		<div class="form-group">
		<h4>Tiempo de Espera</h4>
			{!!	Form::number('espera',null,["size"=>"2", "min"=>"0", "max"=>"24", "value"=>"0", 'style'=>'width:340px' ])!!}

			{!!	Form::number('espera',null,["size"=>"2", "min"=>"0", "max"=>"59", "value"=>"0"])!!}
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

