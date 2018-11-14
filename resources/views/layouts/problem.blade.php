@extends('menu')
@section('cuerpo')
<?php

use App\Specialist;
use App\Problem;
use App\Person;
use App\Status;

$idProblem = $_POST['idProblem'];

$problem = Problem::where('id','=',$idProblem)->get();

$idUser = $problem[0]['idUser'];
//$idProblem = $problem[0]['idProblem'];
$fecha = $problem[0]['fecha'];
$imagen = $problem[0]['img'];
$description = $problem[0]['description'];
$zone = $problem[0]['zone'];
$specialty= $problem[0]['specialty'];

$statusProblem = Status::where('idProblem','=',$idProblem)->get();
if(!$statusProblem->isEmpty()){
$status = $statusProblem[0]['status'];
}else{
  $status = 0;
}
if(Session::has('username')){
  $specialist = Specialist::where('username','=',Session('username'))->get();
  if($specialist->isEmpty()){?>
      <div class="alert-danger" role="alert"> Para ponerte en contacto con un cliente, debes ser un especialista.Si eres uno debes <a href="/logins"><strong>Iniciar Sesion</strong></a>. Si no estás registrado puedes hacerlo desde acá <a href="/registro"><strong>REGISTRO.</strong></a></div>
<?php
}else{
?>


<html>
    <head>
    <title>Wou! - Problema</title>
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
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    </head>

   <body style="background:#e8e8e8">

   <br>
<br><br><br><br>
<?php   $user = Person::where('id','=',$idUser)->get();
        $cantProblems = Problem::where('idUser','=',$idUser)->count();
  ?>

<div class="container">
  <div class="row" style="background: white;">
  <div class="col-md-12">
      <div class="padding" style="padding: 10px;">
        <div class="row" style="color:#929292;font-family: 'Lato', sans-serif;">
          <div class="col-md-1">
            <img style="height: 70px;border-radius: 40px; width: 72px;" src="{{$user[0]['ruta']}}">
          </div>
          <div class="col-md-6">
              <p style="font-weight: bold;">{{$user[0]['name'] . ' ' . $user[0]['lastName']}}</p>
              <p><img src="../img/zone.png"> {{ ' ' . $user[0]['city'] . ', ' . $user[0]['zone']}}</p>
          </div>
          <div class="col-md-3">
                <p style="font-weight:bold;">Estado: <span style="color:green;"><img style="height:17px;" src="../img/verify.png"> Verificado</span></p>
                <p style="font-weight:bold;" >Problemas publicados: <span style="color:red">{{$cantProblems}}</span></p>
          </div>

      </div>

      </div>
  </div>
  </div>
  <div class="row" style="background:white;">
    <div class="col-md-12">
      <hr style="border-top: 1px solid #d5d5d5;">
      <p style="color: #929292; "><img src="../img/hoja.png"> Evualuando propuestas - <a id="btn-detalles" style="color:#a6e378;font-weight: bold;" >Ver detalles <img src="../img/detalles.png"></a></p>
      <div id="detalles" style="color: #939393;display:none;"><span style="font-weight: bold;">Detalles:</span> {{$description}}<br><a style="color:red;" id="cancelar">Cerrar detalles</a></div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
$("#btn-detalles").on("click", function(){
  $("#detalles").css("display", "block");
})
</script>
<script type="text/javascript">
$("#cancelar").on("click", function(){
  $("#detalles").css("display", "none");
})
</script>


<div class="container" >
        <div class="row">
            <div class="col-md-12" >
              <div class="padding">
                  <div class="row">
                      <div class="col-md-9" style="background: white;font-family: 'Lato', sans-serif;">
                          <p style="margin-top: 15px;font-size: 30px; color:#929292; font-weight:bold;"> Propuesta </p>
                          <p style="color: #929292;">Envíe una propuesta al usuario - <span style="color:red; font-weight: bold;">No incluir información de contacto</span></p>
                          <form action="/activeProblem" method="GET" onsubmit="return confirm ('Enviar mensaje? ');">
                            <textarea type="text" rows="5" cols="50" class="form-control" name="msj" placeholder="Detalles de la propuesta" required></textarea> <br>
                            <p>¿Cuánto <span style="font-weight: bold;">tiempo</span> necesitas para realizar el trabajo? </p>
                            <input type="text" name="time" placeholder="Ejemplo: 2 dias, 2 horas" class="form-control" style="width: 240px;height: 55px;margin-top: 8px;" /><br>
                            <p style="font-size: 23px; color: #929292;font-weight: bold;">Presupuesto</p>
                            <p>¿Cuánto <span style="font-weight:bold;">dinero</span> necesitas para realizar el trabajo? </p>
                            <input type="text" name="money" placeholder="Ejemplo: 1000, 500" class="form-control" style="width: 240px;height: 55px;margin-top: 8px;" /><br>

                              <div class="alert alert-warning text-center"><p>Envíe una propuesta firme para la solución del problema si únicamente se encuentra realmente interesado en la misma. </p></div>
                              <input type="hidden" name="idProblem" value="{{ $idProblem }}" />
                              <input type="hidden" name="idUser" value="{{ $idUser }}" />
                              <input type="hidden" name="idSpecialist" value="{{ $specialist[0]['id'] }}" />

                              <input type="submit" class="btn btn-primary" value="Enviar propuesta"><a style="margin-left: 8px;" href="/problemas" class="btn btn-danger">Volver</a>
                          </form>
                      </div>
                      <div class="col-md-3" style="margin-top: 15px;">
                          <div class="container" style="color: #929292;font-family: 'Noto Sans', sans-serif;">
                              <p style="font-weight: bold;"><img src="../img/introduccion.png">{{'  '}}Introducción</p>
                              <p style="font-size: 15px;color:#6b6a6a">Cuéntale al cliente con tus palabras por qué consideras que eres la persona indicada para su solucionar su problema.</p><br><br>
                              <p style="font-weight: bold;"><img src="../img/money.png">{{'  '}}Presupuesto</p>
                              <p style="font-size: 15px;color:#6b6a6a">Ofrece un presupuesto inicial para que la persona que te contratará tenga una noción del costo del servicio.</p><br><br>
                              <p style="font-weight: bold;"><img src="../img/timer.png">{{'  '}}Esperar respuesta</p>
                              <p style="font-size: 15px;color:#6b6a6a">Una vez enviada la propuesta, sólo debes esperar que Wouu! se encargue de que el usuario evalúe tu propuesta. De aceptarla, enviará tu contrato por Mensaje Privado.</p><br><br>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

    </body>
</html>


<?php
}}

?>
@endsection
