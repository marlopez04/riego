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
				@foreach($programas as $programa)
					<a class="btn btn-success btn-lg btn-block" href="{{ route('riegohistorial.store', $zona) }}" style="color:#ffffff" >
						<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$programa->nombre }}
					</a>
				@endforeach
