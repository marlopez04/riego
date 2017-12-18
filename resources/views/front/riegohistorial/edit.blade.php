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
						<div class="riego-id" data-id="{{$riegohistorial->id}}"></div>

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
								@if ($zona->id == $riegohistorial->zonariego_id)

									<a class="btn btn-success btn-lg btn-block active" href="#" style="color:#ffffff" data-id="{{$zona->id}}" data-u="2">
										<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$zona->descripcion }}
									</a>

								@else
									<a class="btn btn-success btn-lg btn-block" href="#" style="color:#ffffff" data-id="{{$zona->id}}" data-u="2">
										<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$zona->descripcion }}
									</a>
								@endif
							@endforeach



						</div>

						<div class="zona2" data-id="2">
						</div>
						
						<div class="valvula" data-id="3">
						</div>

						<div class="programa" data-id="4">
						</div>

						<div class="confirmar" data-id="5">
						</div>

					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>


{!! Form::open(['route' => ['riegohistorial.show', $riegohistorial->id ], 'method' => 'POST' , 'id' => 'form-riegohistorial' ]) !!}
{!! Form::close() !!}


@endsection



@section('js')

<script>


$(document).ready(function(){
//creacion de pedido nuevo
	$('.btn-success').click(function(e){

		e.preventDefault();

		console.log("------------");

        var form = $('#form-historialriego');
        //console.log(form);
		var menu = $(this).data('u');
		var iagregar  = $(this).data('id');

		console.log(menu);

		var datamenu;

		switch(menu) {
		    case 1:   //zona
		    	console.log("zona");

              form = $("form")[0];
              token = form[input='_token']['value'];
              url = form.action;

	          data = {
	            token: token,
	            menu: menu,
	            iagregar:iagregar
	          };
	          console.log(url);
	          console.log(menu);
	          $.get(url, data, function(menuh){
			        $('.zona1').hide();
			        $('.valvula').hide();
			        $('.programa').hide();
			        $('.confirmar').hide();
					$('.zona2').fadeOut().html(menuh).fadeIn();
	            });

		        break;
			case 2:  //valvula
				console.log("valvula");
              form = $("form")[0];
              token = form[input='_token']['value'];
              url = form.action;

	          data = {
	            token: token,
	            menu: menu,
	            iagregar:iagregar
	          };
	          console.log(url);
	          console.log(menu);
	          $.get(url, data, function(menuh){
			        $('.zona1').hide();
			        $('.zona2').hide();
			        $('.programa').hide();
			        $('.confirmar').hide();
					$('.valvula').fadeOut().html(menuh).fadeIn();
	            });

		        break;
			case 3:  //programa
				console.log("programa");
              form = $("form")[0];
              token = form[input='_token']['value'];
              url = form.action;

	          data = {
	            token: token,
	            menu: menu,
	            iagregar:iagregar
	          };
	          console.log(url);
	          console.log(menu);
	          $.get(url, data, function(menuh){
			        $('.valvula').hide();
	  				$('.zona1').hide();
			        $('.zona2').hide();
			        $('.confirmar').hide();
					$('.programa').fadeOut().html(menuh).fadeIn();

	            });

		        break;
			case 4:  //confirmar
				console.log("confirmar");
              form = $("form")[0];
              token = form[input='_token']['value'];
              url = form.action;

	          data = {
	            token: token,
	            menu: menu,
	            iagregar:iagregar
	          };
	          console.log(url);
	          console.log(menu);
	          $.get(url, data, function(menuh){
			        $('.zona1').hide();
			        $('.zona2').hide();
			        $('.valvula').hide();
			        $('.programa').hide();
			        $('.confirmar').show();
					$('.confirmar').fadeOut().html(menuh).fadeIn();

	            });
		        break;
		}; //fin switch

    }); // fin funcion 

}); //fin dom ready

</script>

@endsection

