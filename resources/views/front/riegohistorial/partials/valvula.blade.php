<div class= "valvula1">
						<div class="btn-group">
                            <a class="btn btn-success" href="#" style="color:#ffffff" data-u="1" data-id="0">
                            	<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span>
                            	SECTOR
                            </a>
                            <a class="btn btn-success active" href="#" style="color:#ffffff" data-u="2" data-id="0">
                            	<span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span>
                            	VALVULA
                            </a>
                         </div>

					<br>
					<br>
				@foreach($valvulas as $valvula)
                    @if ($valvula->id == $riegohistorial->valvula_id)

                        <a class="btn btn-success btn-lg btn-block active" href="#" style="color:#ffffff" data-id="{{$valvula->id}}" data-u="3">
                            <span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$valvula->nombre }}
                        </a>

                    @else

    					<a class="btn btn-success btn-lg btn-block" href="#" style="color:#ffffff" data-id="{{$valvula->id}}" data-u="3">
    						<span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span> {{$valvula->nombre }}
    					</a>
                    
                    @endif

                @endforeach

</div>

<div class="programa1"></div>

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
                menu: menu,
                id:id
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
                id:id
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
              id:id
            };
            console.log(url);
            console.log(menu);
            $.get(url, data, function(menuh){
              $('.zona1').hide();
              $('.zona2').hide();
              $('.valvula1').hide();
              $('.confirmar').hide();
          $('.programa1').fadeOut().html(menuh).fadeIn();
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
                id:id
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
