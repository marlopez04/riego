						<div class="btn-group">
                            <a class="btn btn-success" href="#" style="color:#ffffff" data-u="1">
                            	<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span>
                            	SECTOR
                            </a>
                            <a class="btn btn-success" href="#" style="color:#ffffff" data-u="2">
                            	<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span>
                            	VALVULA
                            </a>
                            <a class="btn btn-success active" href="#" style="color:#ffffff" data-u="3">
                            	<span class="glyphicon glyphicon-dashboard" style="color:#7FFF00" aria-hidden="true"></span> PROGRAMA
                            </a>
                         </div>
					<br>
					<br>
				@foreach($programas as $programa)
                    @if ($programa->id == $riegohistorial->programa_id)

                        <a class="btn btn-success btn-lg btn-block active" href="#" style="color:#ffffff" data-id=" {{$programa->id }} " data-u="3">
                            <span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$programa->nombre }}
                        </a>

                    @else

    					<a class="btn btn-success btn-lg btn-block" href="#" style="color:#ffffff" data-id=" {{$programa->id }} " data-u="3">
    						<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$programa->nombre }}
    					</a>

                    @endif
                @endforeach

<script>


$(document).ready(function(){
//creacion de pedido nuevo
    $('.btn-success').click(function(e){

        e.preventDefault();

        var form = $('#form-historialriego');
        console.log(form);
        var menu = $(this).data('u');
        var id  = $(this).data('id');
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
                menu: menu
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
                menu: menu
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
                menu: menu
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
                menu: menu
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
