<div class="confirmar1">
                        <div class="btn-group">
                            <a class="btn btn-success" href="#" style="color:#ffffff" data-u="1" data-id="0">
                                <span class="glyphicon glyphicon-inbox" style="color:#7FFF00" aria-hidden="true"></span>
                                SECTOR
                            </a>
                            <a class="btn btn-success" href="#" style="color:#ffffff" data-u="2" data-id="0">
                                <span class="glyphicon glyphicon-filter" style="color:#7FFF00" aria-hidden="true"></span>
                                VALVULA
                            </a>
                            <a class="btn btn-success" href="#" style="color:#ffffff" data-u="3" data-id="0">
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

					<h2>PROGRAMA: {{$programa->nombre}}</h2>
					<br>
					<h3>{{$programa->descripcion}}</h3>
					<br>
            <a href="{{ route('riegohistorial.nuevo', $riegohistorial->id) }}" class="btn btn-warning btn-lg btn-block" style="color:#ffffff"> CONFIRMAR</a>
<!--
            <a href="javascript:void(0)" onclick="update()" class="btn btn-warning btn-lg btn-block" style="color:#ffffff"> CONFIRMAR</a>

-->


</div>
            <div class="zona3" data-id="2">
            </div>
            
            <div class="valvula3" data-id="3">
            </div>

            <div class="programa3" data-id="4">
            </div>



<script>

function update(){
  $.get('<?=route('riegohistorial.nuevo', $riegohistorial->id)?>', function(res){
    $.get('http://192.168.1.103:84/', function(){
      location.href=res;
    });
  });
}


$(document).ready(function(){

//creacion de pedido nuevo
    $('.btn-success').click(function(e){

        e.preventDefault();

        var form = $('#form-historialriego');
        console.log(form);
        var menu = $(this).data('u');
        var iagregar  = $(this).data('id');

    console.log(menu);
    console.log(iagregar);


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
                    $('.zona3').fadeOut().html(menu).fadeIn();
                    $('.zona1').hide();
                    $('.valvula').hide();
                    $('.programa').hide();
                    $('.confirmar1').hide();
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
                    $('.valvula3').fadeOut().html(menu).fadeIn();
                    $('.programa').hide();
                    $('.confirmar1').hide();
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
            console.log(menu);
            $.get(url, data, function(menuh){
              $('.zona1').hide();
              $('.zona2').hide();
              $('.valvula1').hide();
              $('.confirmar1').hide();
          $('.programa3').fadeOut().html(menuh).fadeIn();
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
