
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
						<h1 class="black">segundos transcurridos</h1>
						<h2 class="black">tiempo total</h2>

						<div class="col-md-11">
						<div class="gantt">
						Sector 3
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
				

				ventana1 = window.open("http://192.168.100.103/?VENTILADOR=OFF", "nuevo", "width=400,height=400");

				setTimeout(cerrarVentana,60);
				function cerrarVentana(){
 			    ventana1.close();
				}



					
				}else{
					//cambio el tipo de RIEGO
					$("#prueba").removeClass('progress-bar progress-bar-warning progress-bar-striped active');
					$("#prueba").addClass('progress-bar progress-bar-info progress-bar-striped active');


				ventana1 = window.open("http://192.168.100.103/?VENTILADOR=ON", "nuevo", "width=400,height=400");
				setTimeout(cerrarVentana,60);

				function cerrarVentana(){
 			    ventana1.close();
				}


				};
				

			};

    }
    setInterval(changeColor, 1000);
});
</script>


</body>

</html>


