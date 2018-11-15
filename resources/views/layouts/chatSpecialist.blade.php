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
  $specialist = Specialist::where('username','=',Session('username'))->get();
  if($specialist->isEmpty()){?>
      <div class="alert-danger" role="alert"> Para ponerte en contacto con un cliente, debes ser un especialista.Si eres uno debes <a href="/logins"><strong>Iniciar Sesion</strong></a>. Si no estás registrado puedes hacerlo desde acá <a href="/registro"><strong>REGISTRO.</strong></a></div>
<?php
}else{

$problem = Problem::where('id', '=', $idProblem);
$chat = Chat::where('idSpecialist' ,'=', $specialist[0]['id'])->where('idProblem','=',$idProblem)->orderBy('created_at','asc')->get();
$activeProblem = activeProblem::where('idSpecialist' ,'=', $specialist[0]['id'])->where('idProblem','=',$idProblem)->get();
$status  = Status::where('idSpecialist' ,'=', $specialist[0]['id'])->where('idProblem','=',$idProblem)->get();

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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <title>Wouu! - CHAT</title>
    </head>
    <body>
        <body style="background: #dce8e6;">


<br><br><br><br><br><br>
    <?php  if($activeProblem->isEmpty()){
                  echo '<div class="alert alert-danger">No haz enviando nada...</div>';
              }else{
                  ?>
                  <div class="container">
                    <div class="col-md-12">
                     <div class="card" style="width: 100%">
                     <div class="card-header" style="font-size: 30px">
                        <?php
                        $user = Person::where('id','=',$activeProblem[0]['idUser'])->get(); ?>
<p>Conversación con {{$user[0]['name'] . ' ' . $user[0]['lastName']}}</p>
                    </div>
<div class="card-body">
    <p>Estado del contrato: </p>
    <?php
    if($status[0]['status'] == 0){ ?>
      <div class="alert alert-dark">En la espera de solicitud de contrato por el usuario</div>
  <?php  }
     if($status[0]['status'] == 1){ ?>
         <div class="alert alert-danger">El usuario solicita tus servicios para este problema.
             <form action="/acceptContrato" method="GET" onsubmit="return confirm ('Esta seguro que desea aceptar el contrato ? ');">
               <input type="hidden" name="idUser" value="{{ $activeProblem[0]['idUser'] }}" />
               <input type="hidden" name="idSpecialist" value="{{ $activeProblem[0]['idSpecialist'] }}" />
               <input type="hidden" name="idProblem" value="{{ $activeProblem[0]['idProblem'] }}" />
                 <input type="hidden" name="idStatus" value="{{ $status[0]['id'] }}" />
                 <input type="submit" class="btn btn-danger" name="aceptar" value="Aceptar contrato" />
             </form>
         </div>
<?php }if($status[0]['status'] == 2){ ?>
    <div class="alert alert-warning">Usted se encuentra <strong>realizando</strong> éste trabajo. </div>
<?php }if($status[0]['status'] == 3){ ?>
    <div class="alert alert-info">El trabajo fue  <strong>finalizado</strong>. El cliente debe puntuar para culminar el contrato! </div>
<?php } if($status[0]['status'] == 4){ ?>
    <div class="alert alert-success">El contrato fue <strong>finalizado correctamente</strong>. El puntaje promedio que le quedó es: <strong><?php echo $specialist[0]['points'] ?></strong> </div>
<?php }  ?>

    	<form id="formChat" role="form">
						<div class="form-group">
							<input type="hidden" class="form-control" id="idEmisor" value="{{$specialist[0]['id']}}" name="idEmisor">
							<input type="hidden" class="form-control" id="idReceptor" value="{{$user[0]['id']}}"  name="idReceptor">
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
							<textarea id="message" name="message" placeholder="Enviar mensaje"  class="form-control" rows="3"></textarea>
						</div>
						<button id="enviar" style="  background: none;  border: 0;  color: inherit;  /* cursor: default; */  font: inherit; line-height: normal;
  overflow: visible;
  padding: 0;
  -webkit-user-select: none; /* for button */
   -webkit-appearance: button; /* for input */
     -moz-user-select: none;
      -ms-user-select: none;position:absolute; margin-top:-75px;margin-left: 92%;" ><img style="height: 30px;" src="../img/chat-boton.png"></button>
					</form>
        </div></div>
    </div>
</div>
<?php } ?>
<script>

  var i = 0;

			$(document).on("ready", function(){
				registerMessages();
				$.ajaxSetup({"cache": false}); //LIMPIA CACHE
				setInterval("loadOldMesssages()", 500);

			});

			var registerMessages = function(){

        $("#message").keypress(function (e){
          if(e.which == 13) {
          e.preventDefault(); //EVITA Q EL SUBMIT ENVIE EL FORMULARIO, Y SOLO EJECUTA LA FUNCION
          var form = $("#formChat").serialize(); //OBTIENE TODOS LOS VALORES DEL FORMULARIO
          $.ajax({	//LOS ENVIO POR POST USANDO AJAX
            type: "POST",
            url: "/chat/registerSpecialist.php",
            data: form
          }).done(function(info){
            var altura = $("#conversation").prop("scrollHeight"); //MANTIENE EL SCROLL ABAJO DEL TODO
            $("#conversation").scrollTop(altura);				 //PARA PODER VER EL ULTIMO MENSAJE, HAY Q MODIFICARLO, AGREGAR UN DELAY EN EL READY PARA Q INICIE ABAJO Y FUE
            document.getElementById("message").value = "";
            i=0;
            console.log (info);
          });
        }
        })

				$("#enviar").on("click", function(e){
					e.preventDefault(); //EVITA Q EL SUBMIT ENVIE EL FORMULARIO, Y SOLO EJECUTA LA FUNCION
					var form = $("#formChat").serialize(); //OBTIENE TODOS LOS VALORES DEL FORMULARIO
					$.ajax({	//LOS ENVIO POR POST USANDO AJAX
						type: "POST",
						url: "/chat/registerSpecialist.php",
						data: form
					}).done(function(info){

            document.getElementById("message").value = "";

						console.log (info);
					});

          var altura = $("#conversation").prop("scrollHeight"); //MANTIENE EL SCROLL ABAJO DEL TODO
          $("#conversation").scrollTop(altura);				 //PARA PODER VER EL ULTIMO MENSAJE, HAY Q MODIFICARLO, AGREGAR UN DELAY EN EL READY PARA Q INICIE ABAJO Y FUE
				})
			}
			var loadOldMesssages = function (){
			   var idEmisor = $("#idEmisor").val();
			   var idReceptor = $("#idReceptor").val();
			   var idProblem = $("#idProblem").val();

				$.ajax({
					type: "POST",
					url: "/chat/conversacionSpecialist.php",
					data: {idReceptor, idEmisor, idProblem}

				}).done(function(info){
					$("#conversation").html(info);
					$("#conversation p:last-child").css({"padding-bottom": "20px"});
          if(i == 0){
            var altura = $("#conversation").prop("scrollHeight");
          $("#conversation").scrollTop(altura);
          i=1;
        }
				});
			}

		</script>
</body>
</html>
<?php }} ?>
@endsection
