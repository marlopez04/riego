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

						<div class="zona1" data-id="1">
							<div class="btn-group">
	                            <button type="button" class="btn btn-success active" > 
	                            	<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span>
	                            	SECTOR
	                            </button>
                         	</div>
							<br>
							<br>
							@foreach($zonas as $zona)
								<a class="btn btn-success btn-lg btn-block" href="#" style="color:#ffffff" data-id="{{$zona->id}}" data-u="2">
									<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$zona->descripcion }}
								</a>
							@endforeach

						</div>

						<div class="zona2" hidden data-id="2">
							<!-- div pesando para tener la zona que ya esta guardada en el riegohistorial-->
							zona2
						</div>
						<div class="valvula" hidden data-id="3">
							valvula
								<a class="btn btn-success btn-lg btn-block" href="#" style="color:#ffffff" data-id="2" data-u="3">
									<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> valvula 1
								</a>
						</div>
						<div class="programa" hidden data-id="4">
							programa
								<a class="btn btn-success btn-lg btn-block" href="#" style="color:#ffffff" data-id="2" data-u="4">
									<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> programa 1
								</a>
						</div>
						<div class="confirmar" hidden data-id="5">
							confirmar
								<a class="btn btn-success btn-lg btn-block" href="#" style="color:#ffffff" data-id="2" data-u="1">
									<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> confirmar
								</a>
						</div>

					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->

{!! Form::open(['route' => ['riegohistorial.show', ':RIEGO_ID'], 'method' => 'POST' , 'id' => 'form-riegohistorial' ]) !!}
{!! Form::close() !!}

@endsection



@section('js')

<script>


$(document).ready(function(){
//creacion de pedido nuevo
	$('.btn-block').click(function(muestramenu){

        var form = $('#form-historialriego');
		var menu = $(this).data('u');
		var id  = $(this).data('id');
		var datamenu;


		switch(menu) {
		    case 1:   //zona
		    	console.log("zona");

	          var url = form.attr('action').replace(':RIEGO_ID', id_riego);
	          var token = form.serialize();
	          data = {
	            token: token,
	            menu: menu
	          };
	          console.log(data);
	          $.get(url, data, function(pedido){
			        $('.zona1').show();
			        $('.zona2').hide();
			        $('.valvula').hide();
			        $('.programa').hide();
			        $('.confirmar').hide();
	            });

		        break;
			case 2:  //valvula
				console.log("valvula");
		        $('.zona1').hide();
		        $('.zona2').hide();
		        $('.valvula').show();
		        $('.programa').hide();
		        $('.confirmar').hide();
		        break;
			case 3:  //programa
				console.log("programa");
		        $('.zona1').hide();
		        $('.zona2').hide();
		        $('.valvula').hide();
		        $('.programa').show();
		        $('.confirmar').hide();
		        break;
			case 4:  //confirmar
				console.log("confirmar");
		        $('.zona1').hide();
		        $('.zona2').hide();
		        $('.valvula').hide();
		        $('.programa').hide();
		        $('.confirmar').show();
		        break;
		};

    }); // fin funcion 

}); //fin dom ready

</script>

@endsection

