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
	{!! Form::open(['route' => ['programas.update', $programa], 'method' => 'PUT']) !!}
		<div class="form-group">
			<h4>Nombre</h4>
			{!! Form::text('nombre',$programa->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre del articulo', 'required'])!!}
		</div>
		<div class="form-group">
		<h4>Tiempo de Riego</h4>
		<h5>Minutos</h5>
       		
			{!! Form::select('riego', ['00' => 00, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '06' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, '11' => 11, '12' => 12, '13' => 13, '14' => 14, '15' => 15, '16' => 16, '17' => 17, '18' => 18, '19' => 19, '20' => 20, '21' => 21, '22' => 22, '23' => 23, '24' => 24, '25' => 25, '26' => 26, '27' => 27, '28' => 28, '29' => 29, '30' => 30, '31' => 31, '32' => 32, '33' => 33, '34' => 34, '35' => 35, '36' => 36, '37' => 37, '38' => 38, '39' => 39, '40' => 40, '41' => 42, '43' => 43, '44' => 44, '45' => 45, '46' => 46, '47' => 47, '48' => 48, '49' => 49, '50' => 50, '51' => 51, '52' => 52, '53' => 53, '54' => 54, '55' => 55, '56' => 56, '57' => 57, '58' => 58, '59' => 59], $programa->riego, ['class'=> 'tipo'])!!}

		<div class="form-group">
		<h4>Tiempo de Espera</h4>
		<h5>Horas y Minutos</h5>
       		
       		{!! Form::select('horas_e', ['00' => 00, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, '11' => 11, '12' => 12, '13' => 13, '14' => 14, '15' => 15, '16' => 16, '17' => 17, '18' => 18, '19' => 19, '20' => 20, '21' => 21, '22' => 22, '23' => 23, '24' => 24], $programa->horas_e, ['class'=> 'tipo'])!!}

			{!! Form::select('minutos_e', ['00' => 00, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, '11' => 11, '12' => 12, '13' => 13, '14' => 14, '15' => 15, '16' => 16, '17' => 17, '18' => 18, '19' => 19, '20' => 20, '21' => 21, '22' => 22, '23' => 23, '24' => 24, '25' => 25, '26' => 26, '27' => 27, '28' => 28, '29' => 29, '30' => 30, '31' => 31, '32' => 32, '33' => 33, '34' => 34, '35' => 35, '36' => 36, '37' => 37, '38' => 38, '39' => 39, '40' => 40, '41' => 42, '43' => 43, '44' => 44, '45' => 45, '46' => 46, '47' => 47, '48' => 48, '49' => 49, '50' => 50, '51' => 51, '52' => 52, '53' => 53, '54' => 54, '55' => 55, '56' => 56, '57' => 57, '58' => 58, '59' => 59], $programa->minutos_e, ['class'=> 'tipo'])!!}
		</div>

		<div class="form-group">
		<h4>Ciclos de Riego</h4>
			{!!	Form::number('ciclos',$programa->ciclos,['class'=>'form-control', 'required'])!!}
		</div>

		<div class="form-group">
			<h4>Descripcion</h4>
			{!! Form::textarea('descripcion', $programa->descripcion, ['class' => 'form-control', 'placeholder' => 'Nombre del articulo', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::select('programasiguiente',$programas, $programa->programasiguiente, ['class' => 'form-control select-category']) !!}
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

