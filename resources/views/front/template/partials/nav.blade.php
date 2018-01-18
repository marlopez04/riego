<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
			<a class="navbar-brand" href="index.html">


<!--
				<h1><span class="fa fa-signal" aria-hidden="true"></span> AREVALO <label>SISTEMAS</label></h1>
				<span>
-->

				<img src="{{asset('img/logo.png')}}" style="width:60px;height:50px;"/>
				<img src="{{asset('img/nombre.png')}}" style="width:100px;height:50px;"/>
				</span>
				
			</a>
		</div>
		<!--/.navbar-header-->

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<nav class="link-effect-2" id="link-effect-2">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('front.index')}}" class="effect-3">Home</a></li>
					<li class="dropdown">
						<a href="jobs.html" class="dropdown-toggle effect-3" data-toggle="dropdown">Riego Historial<b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-2">
							<div class="row">
								<div class="col-sm-6">
									<ul class="multi-column-dropdown">
										<li><a href="{{ route('riegohistorial.create')}}">Nuevo Riego</a></li>
										<li><a href="{{ route('riegohistorial.index')}}">Historico</a></li>
									</ul>
								</div>
							</div>
						</ul>
					</li>

					<li class="dropdown">
						<a href="jobs.html" class="dropdown-toggle effect-3" data-toggle="dropdown">Programas<b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-2">
							<div class="row">
								<div class="col-sm-6">
									<ul class="multi-column-dropdown">
										<li><a href="{{ route('programas.create')}}">Nuevo programa</a></li>
										<li><a href="{{ route('programas.index')}}">Programas</a></li>
									</ul>
								</div>
							</div>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<!--/.navbar-collapse-->
		<!--/.navbar-->
	</div>
</nav>