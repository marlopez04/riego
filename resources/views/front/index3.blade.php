@extends('front.template.main')

@section('content')

<!--
<style>

.breadcrumb { 
  list-style: none; 
  overflow: hidden; 
  font: 18px Sans-Serif;
}
.breadcrumb li { 
  float: left; 
}
.breadcrumb li a {
  color: white;
  text-decoration: none; 
  padding: 10px 0 10px 65px;
  background: brown; /* fallback color */
  background: hsla(34,85%,35%,1); 
  position: relative; 
  display: block;
  float: left;
}

</style>					
-->
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
				
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 4) }}" style="color:#ffffff" >
						<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> SOJA
					</a>
					
					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 4) }}" style="color:#ffffff" >
						<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> ARVEJA
					</a>

					<a class="btn btn-success btn-lg btn-block" href="{{ route('front.edit', 4) }}" style="color:#ffffff" >
						<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> GIRASOL
					</a>

					</div>
						
				</div>
			</div>
			<!-- status -->
		</div>
	</div>

<!-- insumos inicio -->


@endsection

