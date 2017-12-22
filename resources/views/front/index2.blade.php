
<!DOCTYPE html>
<html>

<head>
	<title>Brotes</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="{{asset('plugins/rrhhtemplate/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('plugins/rrhhtemplate/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

	<link href="{{asset('plugins/rrhhtemplate/css/font-awesome.css')}}" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>

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
</head>

<body>
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">

<div class="monthly-grid">
	<div class="panel panel-widget">
		<div class="panel-title">
			RIEGO 	  
		</div>
			<div class="panel-body">
				<!-- status -->
				<div class="contain">									
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>estado</th>
			<th>zona</th>
			<th>valvula</th>
			<th>ultimoriego</th>
			<th>dif.tiempo</th>
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
					<td>{{ Carbon\Carbon::parse($sysdate)->diffInSeconds(Carbon\Carbon::parse($riegohistorial->valvula->ultimoriego))}}</td>
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

						<h1 class="black">segundos transcurridos</h1>
						<h2 class="black">tiempo total</h2>
						<br>
						<br>
						<br>
<!--PAGINA FINAL INICIO-->

@foreach($zonas as $zona)
	@if($zona->id == 2)
<div class="soja" style="background:#8fc270;">
<h1>{{ $zona->descripcion}}</h1>
	@foreach($zona->valvulas as $valvula)
			<div class="col-md-12">
					<div class="gantt">
						{{ $valvula->id}} {{ $valvula->nombre}}
						</div>

						<div class="progress">
						  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
						  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-id="{{ $valvula->id}}">
						    0% (EN ESPERA)
						  </div>
						</div>
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
<h1>{{ $zona->descripcion}}</h1>
	@foreach($zona->valvulas as $valvula)
			<div class="col-md-12">
					<div class="gantt">
						{{ $valvula->id}} {{ $valvula->nombre}}
						</div>

						<div class="progress">
						  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
						  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-id="{{ $valvula->id}}">
						    0% (EN ESPERA)
						  </div>
						</div>
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
<h1>{{ $zona->descripcion}}</h1>
	@foreach($zona->valvulas as $valvula)
			<div class="col-md-12">
					<div class="gantt">
						{{ $valvula->id}} {{ $valvula->nombre}}
						</div>

						<div class="progress">
						  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
						  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%" data-id="{{ $valvula->id}}">
						    0% (EN ESPERA)
						  </div>
						</div>
			</div>
<br>
<br>
<br>
	@endforeach
	@endif
@endforeach

</div>

<!--PAGINA FINAL FIN-->

<!--
						<div class="gantt">
						prueba de jquery
						</div>

						<div class="progress">
						  <div id="prueba" class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
						  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
						    50% (REGANDO)
						  </div>
						</div>

					<div class="gantt">
						Riego de girasol
						</div>

						<div class="progress">
						  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
						  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
						    60% (EN ESPERA)
						  </div>
						</div>

						<div>
							<iframe src="http://192.168.100.103" frameborder="0"></iframe>
						</div>

						</div>
-->
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->

		</div>
	</div>
	<!-- //mid-services -->
	<!-- js -->
	<script type="text/javascript" src="{{asset('plugins/rrhhtemplate/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/rrhhtemplate/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


<script type="text/javascript">

//convierto el objeto riegos en json
var riegoarray = <?php echo json_encode($riegos->toArray()) ?> 

$.each(riegoarray, function(i, item) {
    console.log(item[i]);
});​

/*
$.each(data, function(i, item) {
    alert(data[i].PageName);
});​
*/

contador = 0;
tiempototal = 15;


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


//direcciones para arduino

$(document).ready(function() {    
    function changeColor(){
    	contador = contador + 1;
    	porcentaje = Math.round((contador * 100) / tiempototal);

    	porcentajeS = "width:" + porcentaje + "%";
    	display = porcentaje + "% (REGANDO)"

//            $('h1').text(contador);
//            $('h2').text(tiempoD);
            $("#prueba").attr("aria-valuenow", porcentaje)
            $("#prueba").attr("style", porcentajeS);
            $("#prueba").html(display);

			if (porcentaje == 100) {
				contador = 0;

				if ($("#prueba").hasClass('progress-bar progress-bar-info progress-bar-striped active')) {
					//cambio el tipo de ESPERA
					$("#prueba").removeClass('progress-bar progress-bar-info progress-bar-striped active');
					$("#prueba").addClass('progress-bar progress-bar-warning progress-bar-striped active');
				
/*

				ventana1 = window.open("http://192.168.100.103/?VENTILADOR=OFF", "nuevo", "width=400,height=400");

				setTimeout(cerrarVentana,60);
				function cerrarVentana(){
 			    ventana1.close();
				}

*/

					
				}else{
					//cambio el tipo de RIEGO
					$("#prueba").removeClass('progress-bar progress-bar-warning progress-bar-striped active');
					$("#prueba").addClass('progress-bar progress-bar-info progress-bar-striped active');
/*

				ventana1 = window.open("http://192.168.100.103/?VENTILADOR=ON", "nuevo", "width=400,height=400");
				setTimeout(cerrarVentana,60);

				function cerrarVentana(){
 			    ventana1.close();
				}

*/

				};
				

			};

    }
    setInterval(changeColor, 1000);
});
</script>


</body>

</html>


