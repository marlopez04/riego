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

<script>

$(document).ready(function(){
//creacion de pedido nuevo
    $('.btn-success').click(function(e){

        e.preventDefault();

        var form = $('#form-historialriego');
        console.log(form);
        var menu = $(this).data('u');
        var iagregar  = $(this).data('id');
        var id_riego = $('.riego-id').data('id');

        var datamenu;


        switch(menu) {
            case 1:   //zona
                console.log("zona");

              form = $("form")[0];
              token = form[input='_token']['value'];
              url = form.action;

              data = {
                token: token,
                menu: menu,
                iagregar:iagregar
              };
              console.log(url);
              $.get(url, data, function(menu){
                    $('.zona2').fadeOut().html(menu).fadeIn();
                    $('.zona1').hide();
                    $('.valvula').hide();
                    $('.programa').hide();
                    $('.confirmar').hide();
                });

                break;
            case 2:  //valvula
                console.log("valvula");
              form = $("form")[0];
              token = form[input='_token']['value'];
              url = form.action;

              data = {
                token: token,
                menu: menu,
                iagregar:iagregar
              };
              console.log(url);
              $.get(url, data, function(menu){
                    $('.zona1').hide();
                    $('.zona2').hide();
                    $('.valvula').fadeOut().html(menu).fadeIn();
                    $('.programa').hide();
                    $('.confirmar').hide();
                });

                break;
            case 3:  //programa
                console.log("programa");
              form = $("form")[0];
              token = form[input='_token']['value'];
              url = form.action;

              data = {
                token: token,
                menu: menu,
                iagregar:iagregar
              };
              console.log(url);
              $.get(url, data, function(menu){
                    $('.programa').fadeOut().html(menu).fadeIn();
                    $('.zona1').hide();
                    $('.zona2').hide();
                    $('.valvula').hide();
                    $('.confirmar').hide();

                });

                break;
            case 4:  //confirmar
                console.log("confirmar");
              form = $("form")[0];
              token = form[input='_token']['value'];
              url = form.action;

              data = {
                token: token,
                menu: menu,
                iagregar:iagregar
              };
              console.log(url);
              $.get(url, data, function(menu){
                    $('.confirmar').fadeOut().html(menu).fadeIn();
                    $('.zona1').hide();
                    $('.zona2').hide();
                    $('.valvula').hide();
                    $('.programa').hide();

                });
                break;
        }; //fin switch

    }); // fin funcion 

}); //fin dom ready

</script>
