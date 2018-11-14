@extends('menu')
@section('cuerpo')


<?php

use App\Specialist;
use App\activeProblem;
use App\Problem;
use App\Contrato;
use App\Person;
use App\Chat;

if(Session::has('username')){
$specialist = Specialist::where('email','=',Session('username'))->get();
$mensajes = activeProblem::where('idSpecialist','=',$specialist[0]['id'])->orderby('created_at', 'DESC')->get();

?>
<!DOCTYPE html>
    <head>

        <style>
@media (min-width: 34em) {

    #contenedor-datos{margin-top: 75px;}
}

@media (min-width: 48em) {

    #contenedor-datos{margin-top: 75px;}
}

@media (min-width: 62em) {

    #contenedor-datos{margin-top: 0px;}
}

@media (min-width: 75em) {

    #contenedor-datos{margin-top: 0px;}

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
    #contenedor-datos{margin-top: 75px;}

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
    #contenedor-perfil1{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:60px;}
    #contenedor-perfil2{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:60px;}
    #dropdown1{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #dropdown2{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #contenedor-animation{margin:0;margin-top:190px;}
    #contenedor-datos{margin-top: 75px;}

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
    #contenedor-perfil1{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:60px;}
    #contenedor-perfil2{display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;margin-right:310px;margin-top:60px;}
    #dropdown1{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #dropdown2{height: 800px;font-size: 50px;font-weight: bold;line-height: 3;margin-left: -50px;width: 520px;margin-top: 10px;background: #d6d6d6;}
    #contenedor-datos{margin-top: 0px;}

}


</style>






     <link rel="shortcut icon" href="../img/ico.ico">
     <script src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/component.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <title>Wou! - Panel de admistración de: {{$specialist[0]['name'] . '  ' . $specialist[0]['lastName']}}</title>
    </head>
<body style="background: #dce8e6;">

      <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

    <div class="loader"></div>
    <style>
        .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('img/loader.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
    </style>



<br><br><br><br>

<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Cambio de contraseña - Wouu!</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="container">
<p>Para cambiar la contraseña ingrese en primer lugar la contraseña actual. Y luego la nueva.
<form class="form-group" action="/savePasswordSpecialist" method="GET" enctype="multipart/form-data" onsubmit="return confirm ('Está seguro que desea cambiar su contraseña? ');">
<input type="hidden" id="idUser" value="{{$specialist[0]['id']}}"/>
<input id="pass" type="text" class="form-control" name="pass" placeholder="Ingrese la contraseña actual..." aria-describedby="basic-addon1" required /> <div id="resultado"></div><br>
<div class="alert alert-warning" role="alert">A continuación ingrese la nueva contraseña </div>
<input id="newpass" type="password" class="form-control" name="newPassword" placeholder="Ingrese la nueva contraseña" required /> <br>
<input onchange="comprobarClave()" id="newpassconfirm" type="password" class="form-control" name="passwordconfirm" placeholder="Ingrese la contraseña nuevamente" required /> <br>
<div id="resultCorrect" style="color:green;display:none;" >Las contraseñas coinciden correctamente</div>
<div id="resultIncorrect" style="color:red;display:none;">Las contraseñas <strong>NO</strong> coinciden</div>
<input type="hidden" name="idUser" value="{{ $specialist[0]['id'] }}" />

</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
<input id="confirmar" type="submit" class="btn btn-primary" style="display: block;" value="Confirmar cambio">
</form>
</div>
</div>
</div>
</div>


<?php

if ($specialist[0]['activate'] == 0){ ?>

  <div class="alert alert-danger text-center" roll="alert"> <strong>Éste perfil espera por la confirmación de E-mail.</strong> Ingrese a su casilla, abra el mail enviado desde validacion@wouu.com.ar y debe darle click en el link de verificación para poder participar del sitio. </div>

<?php }

if ($specialist[0]['activate'] == 1){ ?>

  <div class="alert alert-danger text-center" roll="alert"> Éste perfil espera por la verificación de su práctica profesional por E-mail. Por favor <strong>revise la casilla de correo y envíe la información solicitada</strong> por la administración para poder participar de los problemas publicados por las personas.</div>

<?php }
if ($specialist[0]['activate'] == 2){ ?>

  <div class="alert alert-danger text-center" roll="alert"> Para poder participar del WOUU debe <STRONG>cambiar la foto de perfil por lo menos 1 vez</STRONG>. Debe asegurarse que sea una foto de usted, ya que la verificación de cambio de imagen la realiza un administrador. </div>

<?php } if ($specialist[0]['activate'] == 3){ ?>

  <div class="alert alert-danger text-center" roll="alert">Usted se encuentra en espera de confirmacion de <strong>cambio de imagen de perfil</strong> por parte de la administración. En menos de 24 hs obtendrá una respuesta.</div>

<?php } ?>



<div class="container-fluid" id="contenedor-datos">
    <div class="card" style="background:white;box-shadow: 2px 2px 7px 4px #888888; border-radius: 9px;">
        <div class="card-body">
            <div class="row">
            <div class="col-md-4">
                   <form id="uploadForm" action="/changeImage" method="POST" enctype="multipart/form-data">
                           <img id="imgperfil" height="240" width="100%" src="{{$specialist[0]['ruta']}}">
                        <input type="hidden" name="idSpecialist" value="{{$specialist[0]['id']}}" />
                        <input id="file" style="margin-top: 10px;" name="file" type="file" class="inputfile" required/>
                        <label for="file"><img height="55" src="../img/addimg.png"></label>
                        <input type="hidden" value="{{csrf_token()}}" name="_token" ><br>
                       <div id="btn-guardar" style="display: none"><input type="image" height=50 src="../img/saveimg.png" style="display:block; margin:0 auto" alt="Submit Form" /></div>
                        </form><br>
                         <?php
                  if($specialist[0]['activate'] == 0 || $specialist[0]['activate'] == 1){ ?>

                  <div class="alert alert-danger">Debe completar su registro para poder <strong>ver los problemas</strong></div>
                  </

                  <?php
                  } if($specialist[0]['activate'] == 2){?>
                       <br>
                        <div class="alert alert-warning text-center">Para ver los problemas debe <strong>cambiar la imagen de perfil</strong> por lo menos 1 vez...</div>


                 <?php
                    } if($specialist[0]['activate'] == 3){?>

                        <div class="alert alert-warning text-center">Para ver los problemas debe <strong>el administrador </strong> debe confirmar el cambio de tu imagen de perfil. No lleva más de 24 hs</div>

            <?php  }
                 else{ ?>


            <?php } ?>

                <br>


        </div>
        <br>
    <div class="col-md-8">

                       <div class="text-center" style="font-size:35px;font-weight: bold;" >{{$specialist[0]['name'] . ' ' . $specialist[0]['lastName']}}
                 </div>
                 <table cellspacing="80px">
                     <tr><td style="padding: 18px 32px;">
                     <div id="noEdit">
                    <!-- DATOS PERSONALES  -->
                    <p class="card-text"> <strong>DNI: </strong>{{ $specialist[0]['dni'] }} </p>
                    <p class="card-text"> <strong>Telefono:</strong> {{ $specialist[0]['phone'] }} </p>
                      <p class="card-text"> <strong>Provincia:</strong> {{ $specialist[0]['province'] }} </p>
                    <p class="card-text"> <strong>Horario inicial: </strong>{{ $specialist[0]['initSchedule'] }} </p>
                    <p class="card-text"><strong>Descripción</strong>

                    <?php if ($specialist[0]['description'] == ''){ ?>
                        <div class="alert alert-danger">Debes describir tu trabajo. Click en editar datos para poder ingresar una descripcion.</div>
                  <?php
                  }else{?>
                      {{$specialist[0]['description']}}</p>
                  <?php }
                    ?>

                </div>
               </td>
               <td>
                <div id="noEdit2">
                    <!-- DATOS PERSONALES  -->
                      <p class="card-text"> <strong>E-mail: </strong> {{ $specialist[0]['email'] }} </p>
                     <p class="card-text"> <strong>Ciudad: </strong> {{ $specialist[0]['city'] }} </p>
                    <p class="card-text"> <strong>Especialidad:</strong> {{ $specialist[0]['specialty'] }} </p>
                    <p class="card-text"> <strong>Horario Final:</strong> {{ $specialist[0]['finalSchedule'] }} </p>
                </div>
                 </td>
                </tr>
                </table>
                <div class="row">
                    <div class="col-md-6">
                <div id="edit" style="display: none;padding: 0px">
                      <form action="/editSpecialist" method="GET">
                        <input type="hidden" name="id" value="{{$specialist[0]['id'] }}" />
                        <input type="text" class="form-control" name="email" placeholder="{{ $specialist[0]['email'] }} "/><br>
                        <input type="text" class="form-control" name="phone" placeholder="{{ $specialist[0]['phone'] }} "/><br>
                        <input type="text" class="form-control" name="dni" placeholder="{{ $specialist[0]['dni'] }} DNI "/><br>
                        <p class="alert alert-info">Ingrese una descripcion de su trabajo lo más específica posible, dado a que ésta misma aparecerá en el buscador. </p>
                        <textarea type="text" class="form-control" name="description" placeholder="{{ $specialist[0]['description'] }} "></textarea><br>
                </div></div>
                <div class="col-md-6">
                      <div id="edit2" style="display:none;">
                      <input type="text" class="form-control" name="initSchedule" placeholder="Horario Inicial"/><br>
                      <input type="text" class="form-control" name="finalSchedule" placeholder="Horario Final"/><br>
                      <input type="image" height=50 src="../img/saveEdit.png" style="display:block; margin:0 auto" alt="Submit Form" />
                       <a id="btn" onclick="myFunction2()"><img style="margin-left: 130px; margin-top: 10px;" height="50" src="../img/cancelaredit.png"/></a>
                      <br>
                      </form>

               <br><br>
                </div></div>




            </div>

            </div>

   </div>
      </div>
  </div><br><br>

<div class="container center-block text-center" style="margin: 0 auto;">
<a onclick="myFunction()" ><img height=50 src="../img/editar.png"></a>
 <a href="/problemas"> <img height=50 src="../img/problemas.png"> </a>
 </div>

<br><br>

<div class="container">
    <div class="card" style="background:white;box-shadow: 2px 2px 7px 4px #888888; border-radius: 9px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                        <div class="container">
                            <div class="row" style="margin:0">
                                <div class="col-md-12 text-center" style="font-size: 30px;font-family: 'Raleway', sans-serif;color:#b01e59;font-weight: bold;">
                                  Problemas
                                      <?php
                          $activeProblem = activeProblem::where('idSpecialist','=',$specialist[0]['id'])->get();
                          if($activeProblem->isEmpty()){ ?>
                              <div class="alert alert-warning" style="font-size: 15px;">Actualmente no está participando de ningún problema</div>
                          <?php }
                          else
                          {
                      for ($i = 0; $i<count($activeProblem);$i++){
                          $problems = Problem::where('id', '=', $activeProblem[$i]['idProblem'])->get();
                          $usuario = Person::where('id', '=', $activeProblem[$i]['idUser'])->get();
                          if(!$problems->isEmpty()){
                      ?>
                    <div class="col-md-12">
                      <div id="" class="card" style="border-style: none">
                          <div class="card-body">
                              <h6 class="card-subtitle mb-2 text-muted" style="text-align:left;">{{ $problems[0]['specialty']}} //  del usuario <strong>{{$usuario[0]['name'] . ' ' . $usuario[0]['lastName']}} </strong><span style="float:right;">{{$problems[0]['created_at']}}</span></h6>
                              <hr style="border-color:black;width: 100%;border-width:2px;">
                              <p style="text-align:left; font-size: 15px;color:gray;"><strong> Descripción: </strong>  {{ $problems[0]['description']}}</p>
                              </form>
                              <form action="deleteParticipation" method="GET" onsubmit="return confirm ('¿Esta seguro que desea eliminar éste problema? ');">
                                   <input type="hidden" name="idProblem" value="{{$problems[0]['id']}}" />
                                   <input type="hidden" name="idSpecialist" value="{{$specialist[0]['id']}}"/>
                                   <input type="submit" class="btn btn-danger" value="Rechazar Contrato" />
                              </form>
                              <form action="/chatSpecialist" method="POST">
                                <input type="hidden" name="idProblem" value="{{$problems[0]['id']}}" />
                                <input type="hidden" value="{{csrf_token()}}" name="_token" >
                                <input type="submit" class="btn btn-outline-primary" value="Ver contrato" />
                            </form>
                          </div>
                      </div>
                    </div>

                      <?php }}} ?>


                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>

<br>
<div class="container">
    <div class="card" style="background:white;box-shadow: 2px 2px 7px 4px #888888; border-radius: 9px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <?php
                    $contratos = Contrato::where("idSpecialist","=",$specialist[0]['id'])->get();
                    if($contratos){?>
                        <div class="container">
                            <div class="row" style="margin:0">
                                <div class="col-md-12 text-center" style="font-size: 30px;font-family: 'Raleway', sans-serif;color:#b01e59;font-weight: bold;">
                                    Contratos
                                </div>
                            </div>
                        </div>

                    <?php for($i = 0 ; $i<count($contratos); $i++){
                            if($contratos[$i]['state'] == 1){
                                $user = Person::where("id","=",$contratos[$i]['idUser'])->get(); ?>
                                <div class="alert alert-dark text-center" role="alert">El usuario <strong>{{$user[0]['name'] . ' ' . $user[0]['lastName']}}</strong> Solicita sus servicios. Por favor acepte o rechaze el pedido antes de las <strong>24hs.</strong>
                                    <form action="/aceptarContrato" method="GET" class="form-inline">
                                        <input type="hidden" name="id" value="{{$contratos[$i]['id']}}">
                                        <input type="submit" class="btn btn-primary text-center" value="ACEPTAR">
                                    </form>
                                </div>
                            <?php }
                             if($contratos[$i]['state'] == 2){
                                $user = Person::where("id","=",$contratos[$i]['idUser'])->get(); ?>
                                <div class="alert alert-warning text-center" role="alert">El contrato con el usuario <strong>{{$user[0]['name'] . ' ' . $user[0]['lastName']}}</strong> fue aceptado y se encuentra en <strong>realizacion.</strong>

                                </div>
                            <?php }
                             if($contratos[$i]['state'] == 3){
                                $user = Person::where("id","=",$contratos[$i]['idUser'])->get(); ?>
                                <div class="alert alert-primary text-center" role="alert">El contrato con <strong>{{$user[0]['name'] . ' ' . $user[0]['lastName']}}</strong> se encuentra en espera de <strong>puntuación.</strong>

                                </div>
                            <?php }
                              if($contratos[$i]['state'] == 4){
                                $user = Person::where("id","=",$contratos[$i]['idUser'])->get(); ?>
                                <div class="alert alert-success text-center" role="alert">El contrato con <strong>{{$user[0]['name'] . ' ' . $user[0]['lastName']}}</strong> fue <strong>FINALIZADO CON EXITO.</strong>

                                </div>
                            <?php }


                        }
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>





<script>
function myFunction() {
    document.getElementById("edit").style.display = "block";
     document.getElementById("edit2").style.display = "block";
    document.getElementById("noEdit").style.display = "none";
     document.getElementById("noEdit2").style.display = "none";
}
</script>
 <script>
function myFunction2() {
    document.getElementById("edit").style.display = "none";
    document.getElementById("edit2").style.display = "none";
    document.getElementById("noEdit").style.display = "block";
     document.getElementById("noEdit2").style.display = "block";
}
</script>
 <script>
function myFunction3() {
    document.getElementById("datos").style.display = "block";
}
</script>

<?php }else{
  echo 'DEBE INICIAR SESSION ';
} ?>

<script type="text/javascript">
$('#password').on('shown.bs.modal', function () {
$('#myInput').trigger('focus')
})
</script>


<script>
$(document).ready(function(){

  var consulta;

  //hacemos focus
  $("#pass").focus();
  $("#idUser").focus();

  //comprobamos si se pulsa una tecla
  $("#pass").keyup(function(e){
         //obtenemos el texto introducido en el campo
         consulta = $("#pass").val();
         id = $("#idUser").val();
         //hace la búsqueda
         $("#resultado").delay(200).queue(function(n) {

              $("#resultado").html('<img src="../img/ajax-loader.gif" />');

                    $.ajax({
                          type: "POST",
                          url: "/comprobations/comprobarPassProf.php",
                          data: {b: $("#pass").val(), id: $("#idUser").val()},
                          dataType: "html",
                          error: function(){
                                alert("error petición ajax");
                          },
                          success: function(data){
                                $("#resultado").html(data);
                                n();
                          }
              });
         });
  });
});
</script>



</script>

<script type="text/javascript">
function comprobarClave(){
var clave1 =   document.getElementById("newpass").value;
var clave2 = document.getElementById("newpassconfirm").value;

if (clave1 == clave2) {
document.getElementById("newpassconfirm").style.background = "green";
document.getElementById("newpassconfirm").style.color = "white";
document.getElementById("confirmar").style.display = "block";
document.getElementById("resultCorrect").style.display = "block";
document.getElementById("resultIncorrect").style.display = "none";
}else{
document.getElementById("newpassconfirm").style.background = "red";
document.getElementById("newpassconfirm").style.color = "white";
document.getElementById("confirmar").style.display = "none";
document.getElementById("resultCorrect").style.display = "none";
document.getElementById("resultIncorrect").style.display = "block";

}
  }
</script>

<style>
    .inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: white;
    display: block;
    margin: 0 auto;
    text-align: center;
    margin-top: 15px;
    font-size: 15px;
    border-style: solid;
    border-width: 1px;
    width: 115px;
}

.inputfile:focus + label,
.inputfile + label:hover {

}
.inputfile + label {
	cursor: pointer; /* "hand" cursor */
}
.inputfile:focus + label {
	outline: 1px dotted #000;
	outline: -webkit-focus-ring-color auto 5px;
}
    </style>

<script>
    function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').before('<img src="'+e.target.result+'" height="240" width="100%"/>');
        }
        reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<script>
    $("#file").change(function () {
    document.getElementById("imgperfil").style.display = "none";
     $("#btn-guardar").show("slow");
    filePreview(this);
});
</script>

    </body>
</html>
@endsection
