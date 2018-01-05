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
                            <a class="btn btn-success" href="{{ route('front.edit', 3) }}" style="color:#ffffff" >
                            	<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span>
                            	SECTOR
                            </a>
                            <a class="btn btn-success active" href="{{ route('front.edit', 3) }}" style="color:#ffffff" >
                            	<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span>
                            	VALVULA
                            </a>
                         </div>
<br>
<br>
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 5) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span> VALVULA 1
					</a>
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 5) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span> VALVULA 2
					</a>
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 5) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span> VALVULA 3
					</a>
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 5) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span> VALVULA 4
					</a>
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 5) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span> VALVULA 5
					</a>
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 5) }}" style="color:#ffffff" >
							<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span> VALVULA 6
					</a>
						
					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->


@endsection

