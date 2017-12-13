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

	{!! Form::open(['route' => ['riegohistorial.update', $riegohistorial], 'method' => 'PUT']) !!}
		<div class="form-group">
			<h4>Sector</h4>
			{!! Form::select('zonariego_id',$zonas, $riegohistorial->zonariego_id, ['class' => 'form-control select-category']) !!}
		</div>

		<div class="form-group">
			<h4>Valvula</h4>
			{!! Form::select('zonariego_id',$valvulas, $riegohistorial->valvua_id, ['class' => 'form-control select-category']) !!}
		</div>

		<div class="form-group">
			<h4>Programa</h4>
			{!! Form::select('zonariego_id',$programas, $riegohistorial->programa_id, ['class' => 'form-control select-category']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Confirmar',['class' => 'btn btn-success btn-lg btn-block', 'style'=>'color:#ffffff']) !!}
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



@section('js')

<script>


$(document).ready(function(){
//creacion de pedido nuevo
	$('.btn-block').click(function(muestramenu){

/*
        var form = $('#form-historialriego');
		var menu = $(this).data('u');
		var id  = $(this).data('id');
		var id_riego = $('.riego-id').data('id');

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
	          $.get(url, data, function(menu){
					$('.zona2').fadeOut().html(menu).fadeIn();
			        $('.zona1').hide();
			        $('.valvula').hide();
			        $('.programa').hide();
			        $('.confirmar').hide();
	            });

		        break;
			case 2:  //valvula
				console.log("valvula");

	          var url = form.attr('action').replace(':RIEGO_ID', id_riego);
	          var token = form.serialize();
	          data = {
	            token: token,
	            menu: menu
	          };
	          console.log(data);
	          $.get(url, data, function(menu){
			        $('.zona1').hide();
			        $('.zona2').hide();
					$('.valvula').fadeOut().html(menu).fadeIn();
			        $('.programa').hide();
			        $('.confirmar').hide();
	            });

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
*/
    }); // fin funcion 

}); //fin dom ready

</script>

@endsection

