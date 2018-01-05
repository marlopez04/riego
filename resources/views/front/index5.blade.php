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
						<div class="btn-group">
                            <a class="btn btn-success" href="{{ route('front.edit', 3) }}" style="color:#ffffff" >
                            	<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span>
                            	SECTOR
                            </a>
                            <a class="btn btn-success" href="{{ route('front.edit', 4) }}" style="color:#ffffff" >
                            	<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span>
                            	VALVULA
                            </a>
                            <a class="btn btn-success active" href="{{ route('front.edit', 3) }}" style="color:#ffffff" >
                            	<span class="glyphicon glyphicon-dashboard" style="color:#7FFF00" aria-hidden="true"></span> PROGRAMA
                            </a>
                         </div>
<br>
<br>

					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 6) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-dashboard" style="color:#7FFF00" aria-hidden="true"></span> PROGRAMA 1
							</a>

					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 6) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-dashboard" style="color:#7FFF00" aria-hidden="true"></span> PROGRAMA 2
					</a>
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 6) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-dashboard" style="color:#7FFF00" aria-hidden="true"></span> PROGRAMA 3
					</a>
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 6) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-dashboard" style="color:#7FFF00" aria-hidden="true"></span> PROGRAMA 4
					</a>

					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->


@endsection

