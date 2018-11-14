
<?php

use App\Problem;
use App\Status;
use App\Person;
use App\Specialist;
use App\activeProblem;
use App\Chat;

?>

<style>
@media (min-width: 34em) {
    #barraMenu{margin:0;width: 100%;background: white; min-height: 300px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;}
    #logo{margin-top: 110px;margin-left:33px; height:112px; width:300px;}
    #btnIngreso{height:120px;margin-top:80px;}
    #btnPerfil{font-size: 50px;}
    #btnPerfil2{font-size: 50px;}
    #contenedor-perfil1{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #contenedor-perfil2{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #dropdown1{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;width: 520px;margin-top: 10px;background:white;}
    #dropdown2{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;width: 520px;margin-top: 10px; background:white;}
    #contenedor-animation{margin:0;margin-top:230px;}
    #img-animation{ width: 100%; height:350px;}
    #form-busqueda{width:140%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
    #paso1{width:300px; height:400px;margin-left:-90px;}
    #paso2{width:300px; height:400px;margin-left:-34px;}
    #paso3{width:300px; height:400px;margin-left: 25px;}
    #row-busqueda{margin-left: 0;}
}

@media (min-width: 48em) {
    #barraMenu{margin:0;width: 100%;background: white; min-height: 300px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;}
     #logo{margin-top: 110px;margin-left:33px; height:112px; width:300px;}
     #btnIngreso{height:120px;margin-top:80px;}
     #btn-perfil{font-size: 50px;}
    #btn-perfil2{font-size: 50px;}
    #contenedor-perfil1{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #contenedor-perfil2{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #dropdown1{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;width: 520px;margin-top: 10px;background:white;}
    #dropdown2{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;width: 520px;margin-top: 10px;background:white;}
    #contenedor-animation{margin:0;margin-top:230px;}
    #img-animation{ width: 100%; height:350px;}
    #form-busqueda{width:140%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
    #paso1{width:300px; height:400px;margin-left:-90px;}
    #paso2{width:300px; height:400px;margin-left:-34px;}
    #paso3{width:300px; height:400px;margin-left: 25px;}
    #row-busqueda{margin-left: 0;}
}

@media (min-width: 62em) {
    #barraMenu{margin:0;width: 100%;background: white; min-height: 80px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;}
    #logo{margin-top: 20px; height:50px; width:150px;}
    #btnIngreso{height:45px;margin-top:0px;}
    #btn-perfil{font-size: 16px;}
    #btn-perfil2{font-size: 16px;}
    #contenedor-perfil1{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:0px;margin-top:0px;}
    #contenedor-perfil2{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:0px;margin-top:0px;}
    #dropdown1{height: unset;font-size: 13px;font-weight: bold;line-height: 2;width: 238px;background: #d6d6d6;background:white;}
    #dropdown2{height: unset;font-size: 38px;font-weight: bold;line-height: 2;width: 238px;background:white;}
    #contenedor-animation{margin:0;margin-top:0px;}
    #img-animation{ width: 100%; height:290px;}
    #form-busqueda{width:100%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
    #paso1{width:100%; height:450px;margin-left:0px;}
    #paso2{width:100%; height:450px;margin-left:0px;}
    #paso3{width:100%; height:450px;margin-left:0px;}
    #row-busqueda{margin-left: 15%;}
}

@media (min-width: 75em) {
   #barraMenu{margin:0;width: 100%;background: white; min-height: 80px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;}
    #logo{margin-top: 20px; height:50px; width:150px;}
    #btnIngreso{height:45px;margin-top:0px;}
    #btn-perfil{font-size: 16px;}
    #btn-perfil:hover{background:white;}
    #btn-perfil2{font-size: 16px;}
    #btn-perfil2:hover{background:white;}
    #contenedor-perfil1{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:0px;margin-top:0px;}
    #contenedor-perfil2{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:0px;margin-top:0px;}
    #dropdown1{color:gray;height: unset;font-size: 13px;font-weight: bold;line-height: 2;width: 238px;background:white;}
    #dropdown2{color:gray;height: unset;font-size: 13px;font-weight: bold;line-height: 2;width: 238px;background:white;}
    #contenedor-animation{margin:0;margin-top:0px;}
    #img-animation{ width: 100%; height:290px;}
    #form-busqueda{width:100%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
    #paso1{width:100%; height:450px;margin-left:0px;}
    #paso2{width:100%; height:450px;margin-left:0px;}
    #paso3{width:100%; height:450px;margin-left:0px;}
    #row-busqueda{margin-left: 15%;}
}
</style>


<style>
    @media only screen
  and (min-device-width: 375px)
  and (max-device-width: 667px)
  and (-webkit-min-device-pixel-ratio: 2) {
  #barraMenu{margin:0;width: 100%;background: white; min-height: 240px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;}
     #logo{margin-top: 78px;margin-left:33px; height:112px; width:300px;}
     #btnIngreso{height:90px;margin-top:50px;}
     #btn-perfil{font-size: 50px;}
    #btn-perfil2{font-size: 50px;}
    #contenedor-perfil1{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #contenedor-perfil2{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #dropdown1{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #dropdown2{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #contenedor-animation{margin:0;margin-top:190px;}
    #img-animation{ width: 100%; height:350px;}
    #form-busqueda{width:140%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
    #paso1{width:300px; height:400px;margin-left:-90px;}
    #paso2{width:300px; height:400px;margin-left:-34px;}
    #paso3{width:300px; height:400px;margin-left: 25px;}
}

/* Portrait */
@media only screen
  and (min-device-width: 375px)
  and (max-device-width: 667px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: portrait) {
  #barraMenu{margin:0;width: 100%;background: white; min-height: 240px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;}
     #logo{margin-top: 78px;margin-left:33px; height:112px; width:300px;}
     #btnIngreso{height:90px;margin-top:50px;}
     #btn-perfil{font-size: 50px;}
    #btn-perfil2{font-size: 50px;}
    #contenedor-perfil1{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #contenedor-perfil2{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #dropdown1{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #dropdown2{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #contenedor-animation{margin:0;margin-top:190px;}
    #img-animation{ width: 100%; height:350px;}
    #form-busqueda{width:140%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
    #paso1{width:300px; height:400px;margin-left:-90px;}
    #paso2{width:300px; height:400px;margin-left:-34px;}
    #paso3{width:300px; height:400px;margin-left: 25px;}
}

/* Landscape */
@media only screen
  and (min-device-width: 375px)
  and (max-device-width: 667px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: landscape) {
  #barraMenu{margin:0;width: 100%;background: white; min-height: 240px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;}
     #logo{margin-top: 78px;margin-left:33px; height:112px; width:300px;}
     #btnIngreso{height:90px;margin-top:50px;}
     #btn-perfil{font-size: 50px;}
    #btn-perfil2{font-size: 50px;}
    #contenedor-perfil1{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #contenedor-perfil2{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:90px;}
    #dropdown1{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #dropdown2{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #contenedor-animation{margin:0;margin-top:190px;}
    #img-animation{ width: 100%; height:350px;}
    #form-busqueda{width:140%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
    #paso1{width:300px; height:400px;margin-left:-90px;}
    #paso2{width:300px; height:400px;margin-left:-34px;}
    #paso3{width:300px; height:400px;margin-left: 25px;}
}


</style>

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

    <div class="col-md-4" style="margin-top: 4px;font-family: 'Roboto', sans-serif;">
        <div class="container" style="width: 100%;">
            <div class="row" >
                <div id="contenedor-perfil1">

                    <table style="border-style:none">
                        <td>
                              <?php
                              $chat = Chat::where('idUser', '=', $user[0]['id'])->where('visto', '=', 0)->count();
                                if($chat != 0){ ?>

                              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div style="position:absolute;background:red; color:white;border-radius: 24px;font-size: 18px; width: 26px; text-align:center"><?php echo $chat ?></div><img height="45px;" src="../img/campana.png">
                                </button>
                                <div class="dropdown-menu" id="dropdown" style="margin-left: -220px;" >
                                    <span style="text-align:center"><p style="color:black;font-weight:bold;font-size:13px">¡Notificaciones!</p></span>
                                    <?php
                                    $chatsNuevos = Chat::where('idUser', '=', $user[0]['id'])->where('visto', '=', 0)->get();
                                        for($i=0; $i<count($chatsNuevos);$i++){
                                            $idSpecialist = $chatsNuevos[$i]['idSpecialist'];
                                            $specialist = Specialist::find($idSpecialist)->get();
                                                $problema = Problem::find($chatsNuevos[$i]['idProblem'])->get();

                                            ?>

                                       <div class="dropdown-item"><div id="notificacionMensaje" style="font-size:12px;width:260px" class="alert alert-info"><span style="font-size: 11px;"><?php echo $chatsNuevos[$i]['created_at']?></span><br><br><strong><?php echo $specialist[0]['name'] . ' ' .  $specialist[0]['lastName'] ?></strong> Te habló por el problema <br> de <strong><a style="color:#0c5460" href="/userMsj"><?php echo $problema[0]['specialty'] ?></a></strong> </div></div>
                                            <div class="dropdown-divider"></div>


                                        <?php }

                           ?>
                                      <?php }else{ ?>
                                     <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img height="45px;" src="../img/campana.png">
                                </button>
                                <div class="dropdown-menu" id="dropdown" style="margin-left: -220px;" >
                                    <span style="text-align:center"><p style="color:black;font-weight:bold;font-size:13px">¡Notificaciones!</p></span>
                                    <div class="alert alert-danger"><strong>NO</strong> tienes notificaciones.</div>
                                </div>
                              <?php  }
                           ?>
                            </div>
                        </td>
                      <td>
                          <img style="border-radius: 6px;" height="45" width="60" src="<?php echo $user[0]['ruta']?>">
                      </td>
                     <td><div class="btn-group">
                         <button type="button" id="btn-perfil2" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo $user[0]['name'] . '  ' . $user[0]['lastName'] ?>

                         </button><div class="dropdown-menu" id="dropdown1"  >
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
<div class="col-md-4" style="margin-top: 4px;font-family: 'Roboto', sans-serif;">
    <div class="container" style="width:100%;" >
        <div class="row" >
            <div id="contenedor-perfil2" >
                <table style="border-style:none">
                    <td style="background:white;">
                         <?php $chat = Chat::where('idSpecialist', '=', $specialist[0]['id'])->where('vistoSpecialist', '=', 0)->count();
                                if($chat != 0){?>

                                 <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div style="position:absolute;background:red; color:white;border-radius: 24px;font-size: 18px; width: 26px; text-align:center"><?php echo $chat ?></div><img height="45px;" src="../img/campana.png">
                                </button>
                                <div class="dropdown-menu" id="dropdown" style="margin-left: -220px;" >
                                    <span style="text-align:center"><p style="color:black;font-weight:bold;font-size:13px">¡Notificaciones!</p></span>
                                    <?php
                                    $chatsNuevos = Chat::where('idSpecialist', '=', $specialist[0]['id'])->where('vistoSpecialist', '=', 0)->get();
                                        for($i=0; $i<count($chatsNuevos);$i++){
                                            $idUser = $chatsNuevos[$i]['idUser'];
                                            $user = Person::find($idUser)->get();
                                                $problema = Problem::find($chatsNuevos[$i]['idProblem'])->get();

                                            ?>


                                            <div class="dropdown-item"><div id="notificacionMensaje" style="font-size:12px;width:260px" class="alert alert-info"><span style="font-size: 11px;"><?php echo $chatsNuevos[$i]['created_at']?></span><br><br><strong><?php echo $user[0]['name'] . ' ' .  $user[0]['lastName'] ?></strong> Te habló por el problema <br> de <strong><a style="color:#0c5460" href="/specialistMsj"><?php echo $problema[0]['specialty'] ?></a></strong> </div></div>
                                            <div class="dropdown-divider"></div>


                                        <?php }

                                    ?> </div>

                                <?php }else{ ?>
                                     <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img height="45px;" src="../img/campana.png">
                                </button>
                                <div class="dropdown-menu" id="dropdown" style="margin-left: -220px;" >
                                    <span style="text-align:center"><p style="color:black;font-weight:bold;font-size:13px">¡Notificaciones!</p></span>
                                    <div class="alert alert-danger"><strong>NO</strong> tienes notificaciones.</div>
                                </div>
                              <?php  }
                           ?>
                    </td>
                  <td>
                  </td>
                 <td><div class="btn-group">
                     <button type="button" id="btn-perfil" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img style="border-radius: 6px;" height="45" width="60" src="<?php echo $specialist[0]['ruta']?>"> <?php echo $specialist[0]['name'] . '  ' . $specialist[0]['lastName'] ?>
                     </button><div class="dropdown-menu" id="dropdown2" >
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
