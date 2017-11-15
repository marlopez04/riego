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
						<h1 class="black">segundos transcurridos</h1>
						<h2 class="black">tiempo total</h2>

						<button type="button" class="btn btn-default btn-lg">
							  <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> VALVULA 1
						</button>

						<button type="button" class="btn btn-default btn-lg">
							  <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> VALVULA 2
						</button>

						<button type="button" class="btn btn-default btn-lg">
							  <span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span> VALVULA 3
						</button>

						<button type="button" class="btn btn-default btn-lg">
							  <span class="glyphicon glyphicon-download" aria-hidden="true"></span> VALVULA 4 
						</button>

						

						
						

						<div class="col-md-12">
						<div class="gantt">
						Valvula 1
						</div>

						<div class="progress">
						  <div id="prueba" class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
						  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
						    50% (REGANDO)
						  </div>
						</div>

					<div class="gantt">
						Valvula 2
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
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->




<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
 
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

//$("#s3").css("background-color", "#A9C5EB");  //CELESTE
//$("#s4").css("background-color", "#FFCFA4");  //NARANJA

//direcciones para arduino

$(document).ready(function() {    
    function changeColor(){
    	contador = contador + 1;
    	porcentaje = Math.round((contador * 100) / tiempototal);

    	porcentajeS = "width:" + porcentaje + "%";
    	display = porcentaje + "% (REGANDO)"

            $('h1').text(contador);
            $('h2').text(tiempoD);
            $("#prueba").attr("aria-valuenow", porcentaje)
            $("#prueba").attr("style", porcentajeS);
            $("#prueba").html(display);

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



@endsection

