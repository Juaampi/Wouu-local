@extends('menu')
@section('cuerpo')
<?php

use App\Specialist;
use App\Problem;
use App\Person;
use App\Status;
use App\Chat;
use App\activeProblem;

$idProblem = $_POST['idProblem'];

if(Session::has('username')){
  $user = Person::where('email','=',Session('username'))->get();
  if($user->isEmpty()){?>
      <div class="alert alert-danger" role="alert"> Para ponerte en contacto con un especialista, debes ser un usuario.Si eres uno debes <a href="/logins"><strong>Iniciar Sesion</strong></a>. Si no estás registrado puedes hacerlo desde acá <a href="/registro"><strong>REGISTRO.</strong></a></div>
<?php
}else{

$problem = Problem::where('id', '=', $idProblem);
$chat = Chat::where('idUser' ,'=', $user[0]['id'])->where('idProblem','=',$idProblem)->orderBy('created_at','asc')->get();
$activeProblem = activeProblem::where('idUser' ,'=', $user[0]['id'])->where('idProblem','=',$idProblem)->get();
$status  = Status::where('idUser' ,'=', $user[0]['id'])->where('idProblem','=',$idProblem)->get();

?>
<html>
    <head>
    <link rel="shortcut icon" href="../img/ico.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <title>Wouu! - CHAT</title>
    </head>
    <body>
         <body style="background: #dce8e6;">


<br><br><br><br><br><br>
    <?php  if($activeProblem->isEmpty()){
                  echo '<div class="alert alert-danger">No te han respondido aún...</div>';
              }else{
                  ?>
                  <div class="container">
                    <div class="col-md-12">
                     <div class="card" style="width: 100%">
                     <div class="card-header" style="font-size: 30px">
                        <?php
                        for ($i = 0; $i<count($activeProblem);$i++){
                        $specialist = Specialist::where('id','=',$activeProblem[$i]['idSpecialist'])->get();
                        echo $specialist[0]['name'] . ' ' . $specialist[0]['lastName'] ; ?>
                    </div>
<div class="card-body">
  <p style="color:#929292; font-weight: bold; font-size: 22px;" >Propuesta</p>
  <div class="row">
    <div class="col-md-4">
  <p class="alert alert-success" style="">Presupuesto enviado: <span style="color: green; font-weight: bold;">${{$activeProblem[$i]['money']}}</span> </p>
    </div>
    <div class="col-md-4">
      <p class="alert alert-info"> Dias de trabajo: <span style="color:#57a8b7;font-weight:bold;">{{$activeProblem[$i]['time']}}</span></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-warning">{{$activeProblem[$i]['msj']}}</div>
    </div>
  </div>
    <?php
    if($status[0]['status'] == 0){?>

         <form action="/sendContrato" method="GET" onsubmit="return confirm ('Esta seguro que desea contratar al profesional? ');">
             <div class="alert alert-dark">Si usted está de acuerdo con lo proporcionado por el profesional. Debe contratarlo haciendo click en "contratar" 
                <input type="hidden" name="idSpecialist" value="{{ $specialist[0]['id'] }}" />
                  <input type="hidden" name="idUser" value="{{ $user[0]['id'] }}" />
                    <input type="hidden" name="idProblem" value="{{ $idProblem }}" />
                    <input type="hidden" name="idStatus" value="{{ $status[0]['id'] }}" />
                   <input type="submit" name="contratar" class="btn btn-dark" value="CONTRATAR "/>
             </form>
         </div>
  <?php  }
     if($status[0]['status'] == 1){ ?>
         <div class="alert alert-danger">Esperando confirmación de contrato por parte del profesional...
         </div>
<?php }if($status[0]['status'] == 2){ ?>

             <form action="/endContrato" method="GET" onsubmit="return confirm ('Esta seguro que desea finalizar el contrato ?  ');">
               <div class="alert alert-warning">El trabajo se encuentra <strong>en desarrollo</strong> por el profesional! debe finalizar el contrato cuando el trabajo sea terminado!
               <input type="hidden" name="idSpecialist" value="{{ $specialist[0]['id'] }}" />
                 <input type="hidden" name="idUser" value="{{ $user[0]['id'] }}" />
                   <input type="hidden" name="idProblem" value="{{ $idProblem }}" />
                   <input type="hidden" name="idStatus" value="{{ $status[0]['id'] }}" />
                   <input type="submit" name="finalizar" class="btn btn-warning" value="FINALIZAR "/>
             </form>
         </div>
<?php }if($status[0]['status'] == 3){ ?>
  <div class="alert alert-info">El trabajo ah sido<strong> finalizado</strong> por favor puntue al profesional para terminar el contrato
          <form class="form-inline" action="/updatePoints" method="GET">
            <input type="hidden" name="idSpecialist" value="{{ $specialist[0]['id'] }}" />
              <input type="hidden" name="idUser" value="{{ $user[0]['id'] }}" />
                <input type="hidden" name="idProblem" value="{{ $idProblem }}" />
                <input type="hidden" name="idStatus" value="{{ $status[0]['id'] }}" />
        <div class="col-md-4 text-center" ><select class="form-control" name="points"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></div>
        <div class="col-md-4"><textarea type="text" name="coment" class="form-control" placeholder="Deje un comentario sobre el profesional.."></textarea> </div>
        <input type="submit" class="btn btn-info" value="PUNTUAR" />
          </form>
      </div>
<?php } if($status[0]['status'] == 4){ ?>
    <div class="alert alert-success">El contrato fue <strong>finalizado correctamente</strong>. El puntaje promedio que le quedó es: <strong><?php echo $specialist[0]['points'] ?></strong> </div>
<?php }  ?>

    	<form id="formChat" role="form">
						<div class="form-group">
							<input type="hidden" class="form-control" id="idEmisor" value="{{$user[0]['id']}}" name="idEmisor">
							<input type="hidden" class="form-control" id="idReceptor" value="{{$specialist[0]['id']}}"  name="idReceptor">
							<input type="hidden" class="form-control" id="idProblem" value="{{$idProblem}}" name="idProblem">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12" >
									<div id="conversation" style="background-image: url('../img/fondo-chat.jpg');height:400px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden;">

									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="message"></label>
							<textarea id="message" name="message" placeholder="Escribir lo que quieras enviar"  class="form-control" rows="3"></textarea>
						</div>
						<button id="enviar" style="  background: none;  border: 0;  color: inherit;  /* cursor: default; */  font: inherit; line-height: normal;
  overflow: visible;
  padding: 0;
  -webkit-user-select: none; /* for button */
   -webkit-appearance: button; /* for input */
     -moz-user-select: none;
      -ms-user-select: none;position:absolute; margin-top:-79px;margin-left: 92%;" ><img style="height: 30px;" src="../img/chat-boton.png"></button>
					</form>
        </div></div>
    </div>
</div>
<?php }}}    ?>
<script>
var i = 0;
			$(document).on("ready", function(){
				registerMessages();
				$.ajaxSetup({"cache": false}); //LIMPIA CACHE
				setInterval("loadOldMesssages()", 500); //LLAMA LA FUNC CADA MEDIO SEG
			});

			var registerMessages = function(){

        $("#message").keypress(function (e){
          if(e.which == 13) {
          e.preventDefault(); //EVITA Q EL SUBMIT ENVIE EL FORMULARIO, Y SOLO EJECUTA LA FUNCION
          var form = $("#formChat").serialize(); //OBTIENE TODOS LOS VALORES DEL FORMULARIO
          $.ajax({	//LOS ENVIO POR POST USANDO AJAX
            type: "POST",
            url: "/chat/register.php",
            data: form
          }).done(function(info){
            var altura = $("#conversation").prop("scrollHeight"); //MANTIENE EL SCROLL ABAJO DEL TODO
            $("#conversation").scrollTop(altura);				 //PARA PODER VER EL ULTIMO MENSAJE, HAY Q MODIFICARLO, AGREGAR UN DELAY EN EL READY PARA Q INICIE ABAJO Y FUE
            document.getElementById("message").value = "";
            i=1;
            console.log (info);
          });
        }
        })


				$("#enviar").on("click", function(e){
					e.preventDefault(); //EVITA Q EL SUBMIT ENVIE EL FORMULARIO, Y SOLO EJECUTA LA FUNCION
					var form = $("#formChat").serialize(); //OBTIENE TODOS LOS VALORES DEL FORMULARIO
					$.ajax({	//LOS ENVIO POR POST USANDO AJAX
						type: "POST",
						url: "/chat/register.php",
						data: form
					}).done(function(info){

						var altura = $("#conversation").prop("scrollHeight"); //MANTIENE EL SCROLL ABAJO DEL TODO
						$("#conversation").scrollTop(altura);				 //PARA PODER VER EL ULTIMO MENSAJE, HAY Q MODIFICARLO, AGREGAR UN DELAY EN EL READY PARA Q INICIE ABAJO Y FUE

						console.log (info);
					});

				})
			}
			var loadOldMesssages = function (){
			   var idEmisor = $("#idEmisor").val();
			   var idReceptor = $("#idReceptor").val();
			   var idProblem = $("#idProblem").val();

				$.ajax({
					type: "POST",
					url: "/chat/conversacion.php",
					data: {idReceptor, idEmisor, idProblem}

				}).done(function(info){
					$("#conversation").html(info);
					$("#conversation p:last-child").css({"padding-bottom": "20px"});
			    if(i==0){
      var altura = $("#conversation").prop("scrollHeight");
			$("#conversation").scrollTop(altura);
      i=1;
        }
				});
			}

		</script>
</body>
</html>
<?php }?>
@endsection
