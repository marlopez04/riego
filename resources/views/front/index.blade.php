@extends('front.template.main')


@section('head')

<meta http-equiv="refresh" content="5">

<style>
.progress-bar-warning {
  background-color: #ee82ee;
}

h1{
	color:#000000;
	text-align: center;
}

.gantt{
	color:#000000;
}
</style>

@endsection


@section('content')
				
<div class="monthly-grid">
	<div class="panel panel-widget">
		<div class="panel-title">
			RIEGO 	  
		</div>
			<div class="panel-body">
				<!-- status -->
				<div class="contain">									
				
								<div class="contain">									
<!--
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>estado</th>
			<th>zona</th>
			<th>valvula</th>
			<th>ultimoriego</th>
			<th>dif.tiempo</th>
			<th>Porcentaje</th>
			<th>Riego S</th>
			<th>Espera S</th>
			<th>Sumados</th>
			<th>programa</th>
			<th>riego s</th>
			<th>espera s</th>
			<th>ciclos</th>
			<th>bomba</th>
		</thead>
		<tbody>
			@foreach($riegos as $riegohistorial)
				<tr>
					<td>{{ $riegohistorial->id }}</td>
					<td>{{ $riegohistorial->estado }}</td>
					<td>{{ $riegohistorial->zonariego->descripcion }}</td>
					<td>{{ $riegohistorial->valvula->nombre }}</td>
					<td>{{ $riegohistorial->valvula->ultimoriego }}</td>
					<td>{{ Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) }}</td>
					@if ($riegohistorial->estado == "esperando")
						<td>{{ round((((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) - $riegohistorial->programa->riego_s )*100 ) / $riegohistorial->programa->espera_s),0)}}</td>
					@else
						<td>{{ round(((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) *100 ) / $riegohistorial->programa->riego_s),0)}}</td>
					@endif
					<td>{{ $riegohistorial->programa->riego_s }}</td>
					<td>{{ $riegohistorial->programa->espera_s }}</td>
					<td>{{ $riegohistorial->programa->riego_s + $riegohistorial->programa->espera_s}}</td>
					<td>R = {{ $riegohistorial->programa->riego }} min, E = {{ $riegohistorial->programa->horas_e }}:{{ $riegohistorial->programa->minutos_e }}, Ciclos = {{ $riegohistorial->programa->ciclos }} </td>
					<td>{{ $riegohistorial->programa->riego_s}}</td>
					<td>{{ $riegohistorial->programa->espera_s }}</td>
					<td>{{ $riegohistorial->ciclos }}</td>
					<td>{{ $riegohistorial->bomba->id }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>


						<div class="col-md-11">
						<br>
						<br>
						<br>
-->
<!--PAGINA FINAL INICIO-->

@foreach($zonas as $zona)
	@if($zona->id == 2)
<div class="soja" style="background:#8fc270; border-radius: 10px;">

<!--PAGINA FINAL INICIO
<h1>{{ $zona->descripcion}}</h1>
-->
	@foreach($zona->valvulas as $valvula)
			<div class="col-md-12">
				@if($valvula->estado == "libre")
					<div class="gantt">
						{{ $valvula->id}} {{ $valvula->nombre}}
						</div>

							<div class="progress">
							  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
							  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-id="{{ $valvula->id}}">
							    0 % {{$valvula->estado}}
							  </div>
							</div>

				@else



						@foreach($riegos as $riegohistorial)
							@if($riegohistorial->valvula_id == $valvula->id)

								<div class="gantt">
								{{ $valvula->id}} {{ $valvula->nombre}} / R = {{ $riegohistorial->programa->riego }} min, E = {{ $riegohistorial->programa->horas_e }}:{{ $riegohistorial->programa->minutos_e }}, Ciclos = {{ $riegohistorial->ciclos }}/{{ $riegohistorial->programa->ciclos }}
								</div>

								@if ($riegohistorial->estado == "esperando")
									<div class="progress">
									  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
									  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ round((((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) - $riegohistorial->programa->riego_s )*100 ) / $riegohistorial->programa->espera_s),0)}}%" data-id="{{ $valvula->id}}">
									    {{ round((((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) - $riegohistorial->programa->riego_s )*100 ) / $riegohistorial->programa->espera_s),0)}} % {{$riegohistorial->estado}}
									  </div>
									</div>
								@else
									<div class="progress">
										  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
										  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ round(((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) *100 ) / $riegohistorial->programa->riego_s),0)}}%" data-id="{{ $valvula->id}}">
										    {{ round(((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) *100 ) / $riegohistorial->programa->riego_s),0)}}% ({{$riegohistorial->estado}})
										  </div>
										</div>
								@endif
							@endif

						@endforeach
				@endif
			</div>
<br>
<br>
<br>
	@endforeach
	@endif
@endforeach

</div>

<div class="clearfix">
	<br>
</div>

@foreach($zonas as $zona)
	@if($zona->id == 3)
<div class="alfalfa" style="background:#ffd64d; border-radius: 10px; border-width:10px; border-color:#FF8C00;">

<!--PAGINA FINAL INICIO
<h1>{{ $zona->descripcion}}</h1>
-->	
	@foreach($zona->valvulas as $valvula)
			<div class="col-md-12">
				@if($valvula->estado == "libre")
					<div class="gantt">
						{{ $valvula->id}} {{ $valvula->nombre}}
						</div>

							<div class="progress">
							  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
							  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-id="{{ $valvula->id}}">
							    0 % {{$valvula->estado}}
							  </div>
							</div>

				@else

						@foreach($riegos as $riegohistorial)
							@if($riegohistorial->valvula_id == $valvula->id)

								<div class="gantt">
								{{ $valvula->id}} {{ $valvula->nombre}} /  R = {{ $riegohistorial->programa->riego }} min, E = {{ $riegohistorial->programa->horas_e }}:{{ $riegohistorial->programa->minutos_e }}, Ciclos = {{ $riegohistorial->ciclos }}/{{ $riegohistorial->programa->ciclos }}
								</div>

								@if ($riegohistorial->estado == "esperando")
									<div class="progress">
									  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
									  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ round((((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) - $riegohistorial->programa->riego_s )*100 ) / $riegohistorial->programa->espera_s),0)}}%" data-id="{{ $valvula->id}}">
									    {{ round((((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) - $riegohistorial->programa->riego_s )*100 ) / $riegohistorial->programa->espera_s),0)}} % {{$riegohistorial->estado}}
									  </div>
									</div>
								@else
									<div class="progress">
										  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
										  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ round(((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) *100 ) / $riegohistorial->programa->riego_s),0)}}%" data-id="{{ $valvula->id}}">
										    {{ round(((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) *100 ) / $riegohistorial->programa->riego_s),0)}}% ({{$riegohistorial->estado}})
										  </div>
										</div>
								@endif
							@endif

						@endforeach
				@endif
			</div>
<br>
<br>
<br>
	@endforeach
	@endif
@endforeach

</div>


<div class="clearfix">
	<br>
</div>


@foreach($zonas as $zona)
	@if($zona->id == 4)
<div class="girasol" style="background:#f4f186; border-radius: 10px; border-width:10px; border-color:#FFD700;">

<!--PAGINA FINAL INICIO
<h1>{{ $zona->descripcion}}</h1>
-->
	@foreach($zona->valvulas as $valvula)
			<div class="col-md-12">

				@if($valvula->estado == "libre")
					<div class="gantt">
						{{ $valvula->id}} {{ $valvula->nombre}}
						</div>

							<div class="progress">
							  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
							  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-id="{{ $valvula->id}}">
							    0 % {{$valvula->estado}}
							  </div>
							</div>

				@else

						@foreach($riegos as $riegohistorial)
							@if($riegohistorial->valvula_id == $valvula->id)
								<div class="gantt">
								{{ $valvula->id}} {{ $valvula->nombre}} /  R = {{ $riegohistorial->programa->riego }} min, E = {{ $riegohistorial->programa->horas_e }}:{{ $riegohistorial->programa->minutos_e }}, Ciclos = {{ $riegohistorial->ciclos }}/{{ $riegohistorial->programa->ciclos }}
								</div>
								@if ($riegohistorial->estado == "esperando")
									<div class="progress">
									  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
									  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ round((((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) - $riegohistorial->programa->riego_s )*100 ) / $riegohistorial->programa->espera_s),0)}}%" data-id="{{ $valvula->id}}">
									    {{ round((((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) - $riegohistorial->programa->riego_s )*100 ) / $riegohistorial->programa->espera_s),0)}} % {{$riegohistorial->estado}}
									  </div>
									</div>
								@else
									<div class="progress">
										  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
										  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ round(((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) *100 ) / $riegohistorial->programa->riego_s),0)}}%" data-id="{{ $valvula->id}}">
										    {{ round(((Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego)) *100 ) / $riegohistorial->programa->riego_s),0)}}% ({{$riegohistorial->estado}})
										  </div>
										</div>
								@endif
							@endif

						@endforeach
				@endif
			</div>
<br>
<br>
<br>
	@endforeach
	@endif
@endforeach



						</div>
				</div>
			</div>
			<!-- status -->
		</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!--
<script type="text/javascript">
 
contador = 0;
tiempototal = 5000;


//convertir segundos a HH:MM:SS (para mostrar totalizado)   INICIO
var time = tiempototal;

var minutes = Math.floor( time / 60 );
var seconds = time % 60;
 
//Anteponiendo un 0 a los minutos si son menos de 10 
minutes = minutes < 10 ? '0' + minutes : minutes;
 
//Anteponiendo un 0 a los segundos si son menos de 10 
seconds = seconds < 10 ? '0' + seconds : seconds;
 
var result = minutes + ":" + seconds;  // 161:30

var hours = Math.floor( time / 3600 );  
var minutes = Math.floor( (time % 3600) / 60 );
var seconds = time % 60;
 
//Anteponiendo un 0 a los minutos si son menos de 10 
minutes = minutes < 10 ? '0' + minutes : minutes;
 
//Anteponiendo un 0 a los segundos si son menos de 10 
seconds = seconds < 10 ? '0' + seconds : seconds;
 
var result = hours + ":" + minutes + ":" + seconds;  // 2:41:30

tiempoD = result;

//convertir segundos a HH:MM:SS (para mostrar totalizado)   FIN

//$("#s3").css("background-color", "#A9C5EB");  //CELESTE
//$("#s4").css("background-color", "#FFCFA4");  //NARANJA

//direcciones para arduino

$(document).ready(function() {    
    function changeColor(){
    	contador = contador + 1;
    	porcentaje = Math.round((contador * 100) / tiempototal);

    	porcentajeS = "width:" + porcentaje + "%";
    	display = porcentaje + "% (REGANDO)"

			if (porcentaje == 100) {
				contador = 0;

				if ($("#prueba").hasClass('progress-bar progress-bar-info progress-bar-striped active')) {
					//cambio el tipo de ESPERA
					$("#prueba").removeClass('progress-bar progress-bar-info progress-bar-striped active');
					$("#prueba").addClass('progress-bar progress-bar-warning progress-bar-striped active');

					//$("#s3").css("background-color", "#FFCFA4");
				
					
				}else{
					//cambio el tipo de RIEGO
					$("#prueba").removeClass('progress-bar progress-bar-warning progress-bar-striped active');
					$("#prueba").addClass('progress-bar progress-bar-info progress-bar-striped active');
					//$("#s3").css("background-color", "#A9C5EB");


				};
				

			};

    }
    setInterval(changeColor, 1000);
});
</script>
-->


@endsection

