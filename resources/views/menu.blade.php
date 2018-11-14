
  <?php

  use App\Problem;
  use App\Status;
  use App\Person;
  use App\Specialist;
  use App\activeProblem;
  use App\Chat;

  ?>
<link type="text/css" rel='stylesheet' href='css/style-menu.css' />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<div class="row" id="barraMenu" >
    <div class="col-md-8">
        <a href="/index"><img id="logo" src="img/logo.png"/></a>
    </div>

    <?php
    if(Session::has('username')){
    $user = Person::where('email','=',Session('username'))->get();

        if(!$user->isEmpty()){

            $mensajes = activeProblem::where('idUser','=',$user[0]['id'])->orderby('created_at', 'DESC')->get();
    ?>
    <form>
      <input type="hidden" id="idUser2" value="{{$user[0]['id']}}" />
    </form>
    <div class="col-md-4" style="margin-top: 4px;font-family: 'Roboto', sans-serif;">
        <div class="container" style="width: 100%;">
            <div class="row" >
                <div id="contenedor-perfil1">
                    <table style="border-style:none">

                        <td>
                              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div id="cantNotiUser" style="position:absolute;background:red; color:white;border-radius: 24px;font-size: 18px; width: 26px; text-align:center"></div><img height="45px;" src="../img/campana.png">
                                </button>
                                <div class="dropdown-menu" id="dropdown" style="margin-left: -317px;" >
                                    <span style="text-align:center"><p style="color:black;font-weight:bold;font-size:13px">¡Notificaciones!</p></span>
                                  <div id="notificaciones"></div>
                                </div>

                            </div>
                        </td>
                      <td>
                          <img style="border-radius: 6px;" height="45" width="60" src="<?php echo $user[0]['ruta']?>">
                      </td>
                     <td><div class="btn-group">
                         <button type="button" id="btn-perfil2" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo $user[0]['name'] . '  ' . $user[0]['lastName'] ?>

                         </button><div class="dropdown-menu" id="dropdown1" style="margin-left: -110px; border-radius: 10px;" >
                           <a class="dropdown-item" href="/userPanel">Perfil <span style="float:right;"><img style="height:20px;" src="../img/menu-perfil.png"></span></a>
                           <div class="dropdown-divider"></div>
                          <?php
      if($mensajes->isEmpty()){ ?>
      <a class="dropdown-item" style="background: #bd2d5d; color:white;">Sin Mensajes</a>
      <?php }else{
      ?>
      <a class="dropdown-item" href="/userMsj">Mensajes
      <?php $chat = Chat::where('idUser', '=', $user[0]['id'])->where('visto', '=', 0)->count();
                                if($chat != 0){?>
                                  <span style="background:red; color:white;border-radius: 15px;width:20px;font-size: 18px; width: 20px; text-align:center"><?php echo $chat ?></span>
                                <?php }
                           ?><span style="float:right;"><img style="height:17px;" src="../img/menu-mensaje.png"></span></a>
      <?php } ?>
                           <a class="dropdown-item" href="/busqueda">Ver profesionales<span style="float:right;"><img style="height:20px;"  src="../img/menu-profesionales.png"></span></a>
                           <div class="dropdown-divider"></div>
<a class="dropdown-item">
                           <form action="/logout" method="GET">
                             <input type="submit" style="background:none;border:none;" value="Cerrar Sesion" /><span style="float:right;"><img style="height:20px" src="../img/cerrar-sesion.png"></span>
                           </form>
                         </a>
                         </div>
                       </div></td></table>
                </div>
            </div>
        </div>
    </div>

<?php   }else{
$specialist = Specialist::where('email','=',Session('username'))->get();
    if(!$specialist->isEmpty()){
        $mensajes = activeProblem::where('idSpecialist','=',$specialist[0]['id'])->orderby('created_at', 'DESC')->get();
?>
<form class="">
  <input type="hidden" id="idSpecialist2" value="{{$specialist[0]['id']}}" />
</form>
<div class="col-md-4" style="margin-top: 4px;font-family: 'Roboto', sans-serif;">
    <div class="container" style="width:100%;" >
        <div class="row" >
            <div id="contenedor-perfil2" >
                <table style="border-style:none">
                    <td style="background:white;">
                                 <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div id="cantNotiSpecialist" style="position:absolute;background:red; color:white;border-radius: 24px;font-size: 18px; width: 26px; text-align:center"></div><img height="45px;" src="../img/campana.png">
                                </button>
                                <div class="dropdown-menu" id="dropdown" style="margin-left: -274px;border-radius: 10px;" >
                                    <span style="text-align:center"><p style="color:black;font-weight:bold;font-size:13px">¡Notificaciones!</p></span>
                                <div id="notificacionesSpecialist"></div>
                    </td>
                  <td>
                  </td>
                 <td><div class="btn-group">
                     <button type="button" id="btn-perfil" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img style="border-radius: 6px;" height="45" width="60" src="<?php echo $specialist[0]['ruta']?>"> <?php echo $specialist[0]['name'] . '  ' . $specialist[0]['lastName'] ?>
                    </button><div class="dropdown-menu" id="dropdown2" style="margin-left: -12px; border-radius: 10px;">
                       <a class="dropdown-item" href="/specialistPanel">Ver perfil<span style="float:right;"><img style="height:20px;" src="../img/menu-perfil.png"></span></a>
                        <div class="dropdown-divider"></div>
                       <?php if($mensajes->isEmpty()){ ?>
      <a class="dropdown-item" style="background: #bd2d5d; color:white;">Sin Mensajes</a>
      <?php }else{ ?>
      <a class="dropdown-item" href="/specialistMsj">Mensajes  <?php $chat = Chat::where('idSpecialist', '=', $specialist[0]['id'])->where('vistoSpecialist', '=', 0)->count();
                                if($chat != 0){?>
                                  <span style="background:red;width:14px;height:16px;float:right; color:white;border-radius: 7px;font-size: 10px;text-align:center"><?php echo $chat ?></span>
                                <?php }
                           ?>  <span style="float:right;"><img style="height:17px;" src="../img/menu-mensaje.png"></span>     </a>
      <?php } ?>
                       <a class="dropdown-item" href="/busqueda">Profesionales <span style="float:right;"><img style="height:20px;"  src="../img/menu-profesionales.png"></span></a>
                       <?php if ($specialist[0]['activate'] == 0 || $specialist[0]['activate'] == 1){?>
                       <a class="dropdown-item" style="background: red; color:white">No puedes ver problemas</a>
                        <?php }else{ ?>
                        <a class="dropdown-item" href="/problemas">Problemas de hoy <span style="float:right;"><img style="height:20px;"  src="../img/menu-problemas.png"></span></a>
                        <?php } ?>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item">
                         <form action="/logout" method="GET">
                         <input type="submit" style="background:none;border:none;" value="Cerrar Sesion" /><span style="float:right;"><img style="height:20px" src="../img/cerrar-sesion.png"></span>
                       </form>
                     </a>
                     </div>
                   </div></td></table>
            </div>
        </div>
    </div>
</div>

<?php   }}}
if(!Session::has('username')){

  ?>

  <div class="col-md-3" style="margin-top: 20px;font-family: 'Roboto', sans-serif;">
      <div class="container" style="width: 100%;">
          <div class="row vdivide" style="float:right;margin-right: -90px;" >
                  <a href="/logins" style="color:white;"><img id="btnIngreso" src="../img/ingreso.png" /> </a>
          </div>
      </div>
  </div>
<?php

}

?>

</div>

<script>

  var i = 0;

			$(document).on("ready", function(){
				$.ajaxSetup({"cache": false}); //LIMPIA CACHE
				setInterval("loadOldMesssages()", 500);

			});

			var loadOldMesssages = function (){
			   var idUser = $("#idUser2").val();

				$.ajax({
					type: "POST",
					url: "/notificaciones/notificacionesUser.php",
					data: {idUser}

				}).done(function(info){
					$("#notificaciones").html(info);
					});
			}

		</script>

    <script>

      var i = 0;

    			$(document).on("ready", function(){
    				$.ajaxSetup({"cache": false}); //LIMPIA CACHE
    				setInterval("loadOldMesssages2()", 500);

    			});

    			var loadOldMesssages2 = function (){
    			   var idSpecialist = $("#idSpecialist2").val();

    				$.ajax({
    					type: "POST",
    					url: "/notificaciones/notificacionesSpecialist.php",
    					data: {idSpecialist}

    				}).done(function(info){
    					$("#notificacionesSpecialist").html(info);
    					});
    			}

    		</script>

        <script>

          var i = 0;

              $(document).on("ready", function(){
                $.ajaxSetup({"cache": false}); //LIMPIA CACHE
                setInterval("cantPropuestas()", 500);

              });

              var cantPropuestas = function (){
                 var idUser = $("#idUser2").val();

                $.ajax({
                  type: "POST",
                  url: "/notificaciones/cantUser.php",
                  data: {idUser}

                }).done(function(info){
                  $("#cantNotiUser").html(info);
                  });
              }

            </script>

            <script>

              var i = 0;

                  $(document).on("ready", function(){
                    $.ajaxSetup({"cache": false}); //LIMPIA CACHE
                    setInterval("cantContratos()", 500);

                  });

                  var cantContratos = function (){
                     var idSpecialist = $("#idSpecialist2").val();

                    $.ajax({
                      type: "POST",
                      url: "/notificaciones/cantSpecialist.php",
                      data: {idSpecialist}

                    }).done(function(info){
                      $("#cantNotiSpecialist").html(info);
                      });
                  }

                </script>



@yield('cuerpo')
