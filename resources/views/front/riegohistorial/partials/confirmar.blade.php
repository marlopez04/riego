                        <div class="btn-group">
                            <a class="btn btn-success" href="#" style="color:#ffffff" data-u="1" data-id="0">
                                <span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span>
                                SECTOR
                            </a>
                            <a class="btn btn-success" href="#" style="color:#ffffff" data-u="2" data-id="0">
                                <span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span>
                                VALVULA
                            </a>
                            <a class="btn btn-success active" href="#" style="color:#ffffff" data-u="3" data-id="0">
                                <span class="glyphicon glyphicon-dashboard" style="color:#7FFF00" aria-hidden="true"></span> PROGRAMA
                            </a>


                            <a class="btn btn-success active" href="#" style="color:#ffffff" data-u="4" data-id="0">
                            	<span class="glyphicon glyphicon-ok" style="color:#7FFF00" aria-hidden="true"></span>
                            	CONFIRMAR
                            </a>
                            
                         </div>
<br>
<br>
					<h2>SECTOR: {{$riegohistorial->zonariego->descripcion}}</h2>
					<h2>VALVULA: {{$riegohistorial->valvula->nombre}}</h2>
					<h2>PROGRAMA: {{$riegohistorial->programa->nombre}}</h2>
					<br>
					<h3>{{$riegohistorial->programa->descripcion}}</h3>
					<br>

					<a class="btn btn-success btn-lg btn-block" href="#" style="color:#ffffff" data-u="3" data-id="ok">
							<span class="glyphicon glyphicon-ok" style="color:#7FFF00" aria-hidden="true"></span>
							CONFIRMAR
					</a>
						