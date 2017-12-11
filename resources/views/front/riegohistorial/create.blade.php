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

						<div class="btn-group">
                            <button type="button" class="btn btn-success active" > 
                            	<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span>
                            	SECTOR
                            </button>
                         </div>
					<br>
					<br>
				@foreach($zonas as $zona)
					<a class="btn btn-success btn-lg btn-block" href="{{ route('riegohistorial.store', $zona) }}" style="color:#ffffff" >
						<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$zona->descripcion }}
					</a>
				@endforeach

					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->


@endsection

