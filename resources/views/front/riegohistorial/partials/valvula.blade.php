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
				@foreach($valvulas as $valvula)
					<a class="btn btn-success btn-lg btn-block" href="{{ route('riegohistorial.store', $zona) }}" style="color:#ffffff" >
						<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$valvula->nombre }}
					</a>
				@endforeach
