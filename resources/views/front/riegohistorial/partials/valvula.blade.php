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
                    @if ($valvula->id == $riegohistorial->valvula_id)

                        <a class="btn btn-success btn-lg btn-block active" href="#" style="color:#ffffff" >
                            <span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$valvula->nombre }}
                        </a>

                    @else

    					<a class="btn btn-success btn-lg btn-block" href="#" style="color:#ffffff" >
    						<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$valvula->nombre }}
    					</a>
                    
                    @endif
				@endforeach
