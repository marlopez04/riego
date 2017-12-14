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


        $(document).ready(function () {

            $("#cantidad").focusout(function(){ 
  			    var a = $("#cantidad").val();
    			var b = a * 0.3;
   				 $("#stockcritico").val(b);
			});
           
        });



}); //fin dom ready

</script>

@endsection

