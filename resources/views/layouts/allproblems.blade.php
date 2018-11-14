@extends('menu')
@section('cuerpo')

<?php

use App\Specialist;
use App\Problem;
use App\Person;
use App\Status;

if(Session::has('username')){
  $specialist = Specialist::where('username','=',Session('username'))->get();

?>
<!DOCTYPE html>
<html>
    <head>
<style>

@media (min-width: 34em) {
    .card-columns {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;
    }
    #contenedor-cartas{max-width: 1200px;margin-left:18px;width:950px;}
    #img-prof{height:400px;}
}

@media (min-width: 48em) {
    .card-columns {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;
    }
    #contenedor-cartas{max-width: 1200px;margin-left:18px;width:950px;}
    #img-prof{height:400px;}
}

@media (min-width: 62em) {
    .card-columns {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;

    }
     #img-prof{height:200px;}
}

@media (min-width: 75em) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
    }
     #img-prof{height:200px;}
}
</style>


      <style>
          #card:hover{
              box-shadow: 4px 7px 14px 3px #888888;position:fixed;
          -webkit-transition: all 500ms ease;
      -moz-transition: all 500ms ease;
      -ms-transition: all 500ms ease;
      -o-transition: all 500ms ease;
      transition: all 500ms ease;
          }
      </style>

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
    <title>Problemas Publicados en Wouu!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    </head>
   <body style="background-image: url('../img/fondo.jpg')";>

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


<?php //include("menu/menu.php"); ?>

<br>
<script>
$(document).ready(function(){
$("#myInput").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#table tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});
});
</script>

<br><br><br>
<div class="container">
  <div class="row" style="margin:0">
    <div class="col-md-12 text-center">
<p style="font-size: 30px;color: #699d46;font-weight: bold;">¡Acá se encuentran los problemas de la gente!</p><p style="font-size: 20px;color: #5383a2;"> Clickea en contratar si cumplis con los requisitos del usuario</p>
    </div>
  </div>
</div><br>

<<div class="container">
  <div class="row">
        <div class="col-md-10">
        <input class="form-control input-lg" type="text" id="myInput" style="width: 100%;height:38px; font-size: 15px;" onkeyup="myFunction()" placeholder="¿Qué estás buscando?" >
        </div>
        <div class="col-md-1"style="margin-left: -65px;">
        <img src="../img/lupa.png" height="20" style="margin-top:8px;">
        </div>

       </div>
</div><br><br>



<div class="container" id="contenedor-cartas">
<div class="row">
<div class="card-columns">
    <table id="table">
        <?php
        $allproblem = Problem::all();
        if($allproblem->isEmpty()){?>
            <div class="alert alert-danger">Actualmente no existe ningún problema publicado</div><br><br><br><br><br><br>
        <?php }
         for($x=0; $x<count($allproblem); $x++){
              $user = Person::where('id','=',$allproblem[$x]['idUser'])->get();
              ?>
        <tr><td>
        <div id="card" class="card" style="position: relative">
        <img class="card-img-top" id="img-prof" alt="Card image cap" src="{{ $allproblem[$x]['img'] }}" >
        <div class="card-body">
            <h5 class="card-title text-center">  {{ $user[0]['name']}}
            <h6 class="card-subtitle mb-2 text-muted text-center" style="font-size:18px">{{ $allproblem[$x]['specialty'] }}</h6>
            <p class="card-text text-center" style="color:#212529;;font-weight: bold;">  {{ $allproblem[$x]['zone'] }}</p>
            <p class="card-text"><strong>Descripción:</strong>{{ $allproblem[$x]['description'] }}</p>
            <?php $status = Status::where('idProblem','=',$allproblem[$x]['id'])->get();
            if($status->isEmpty()) {
               if($allproblem[$x]['specialty'] == $specialist[0]['specialty']){
            ?>
                <div class="alert alert-dark" role="alert">
                   <form class="form-inline" action="/problem" method="post">
                        <input type="hidden" name="idProblem" value="{{ $allproblem[$x]['id'] }} ">
                        <input type="hidden" value="{{csrf_token()}}" name="_token" >
                        <input type="submit" class="btn btn-dark text-center btn-sm" value="Contactar usuario" >
                    </form>
                </div>
            <?php }else{?>

                 <div class="alert alert-dark" role="alert">
                  Necesita <strong>{{$allproblem[$x]['specialty']}}</strong> y no lo eres.
                </div>

            <?php }}else{
              if($status[0]['status'] == 0 && $specialist[0]['id'] == $status[0]['idSpecialist']){ ?>
             <div class="alert alert-danger" role="alert">Ya respondiste este problema</div>
             <?php }
              if($status[0]['status'] == 0 && $specialist[0]['id'] != $status[0]['idSpecialist']){
                  if($allproblem[$x]['specialty'] == $specialist[0]['specialty']){
                 ?>
                <div style="width:300px" class="alert alert-dark" role="alert">
                <form class="form-inline" action="/problem" method="post">
                     <input type="hidden" name="idProblem" value="{{ $allproblem[$x]['id']}}">
                     <input type="hidden" value="{{csrf_token()}}" name="_token" >
                     <input type="submit" class="btn btn-dark text-center btn-sm" value="Enviar Propuesta" >
                 </form>
                 </div>
             <?php }else{?>
               <div class="alert alert-dark" role="alert">
                Necesita <strong>{{$allproblem[$x]['specialty']}}</strong> y no lo eres.
              </div>
             <?php }}

             if($status[0]['status'] == 1){ ?>
            <div style="width:300px" class="alert alert-danger text-center" role="alert">En espera de confirmación</div>
            <?php }
             if($status[0]['status'] == 2){ ?>
            <div style="width:300px" class="alert alert-warning text-center" role="alert">En realización por un profesional...</div>
            <?php }
             if($status[0]['status'] == 3){ ?>
            <div style="width:300px" class="alert alert-info text-center" role="alert">Realizado (Espera puntuación...)</div>
            <?php }
             if($status[0]['status'] == 4){ ?>
            <div style="width:300px" class="alert alert-success text-center" role="alert">FINALIZADO ! </div>

          <?php } } ?>
        </div>
        </div></td></tr>
    <?php } ?>
        </table>
</div></div></div><br><br><br><br><br><br>

<style>

   @media (min-width: 576px) {

    #footer {
        background:white;
        position: fixed;
        bottom: 0;
        width: 100%;
        font-size: 25px;

    }

    #ingresobtn{
         margin-top: 22px;
    height: 95px;
    width: 290px;
    text-align: center;
    line-height: 70px;
    font-size: 40px;
    }
    #registrobtn{
    margin-bottom: 120px;
    height: 95px;
    width: 290px;
    text-align: center;
    line-height: 70px;
    font-size: 40px;
    }
    #text-description{
        font-size:35px;
    }
}
    @media (min-width: 1200px) {
        #footer {
            color:black;
            background: white;
            height: 100px;
            margin:0;
            font-size: 18px;
            position: relative;
        }
         #ingresobtn{
            margin-top: 0px;
    margin-bottom: 0px;
    height: 60;
    width: 200;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    }
    #registrobtn{
      margin-top: 0px;
    margin-bottom: 0px;
    height: 60;
    width: 200;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    }
    #text-description{
        font-size:18px;
    }
}

</style>
    <footer>
        <div id="footer" class="row" style="box-shadow: 4px 7px 14px 7px #888888; position:fixed;">
          <div class="col-md-4">
          </div>
            <div class="col-md-5" style="padding: 15px;margin-left: 115px;">
                 <a href="https://instagram.com/wouuargentina"><img height="60" src="img/insta.png" /></a>
                <a href="https://www.facebook.com/Wouu-542421186207234/"><img height="60" src="img/fb.png" /></a>
                <a href="https://wa.me/+54 9 1126942226"><img height="60" src="img/wpp.png" /></a>
            </div>
        </div>
    </footer>
    </body>
    <script>
$(document).ready(function(){
  $("#job_posting_search_interestArea").on("change", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#job_posting_search_location").on("change", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>
<?php }else{ ?>
  <div class="alert-danger" role="alert"> Para ver todos los profesionales en Wou necesitas iniciar sesion desde aquí <a href="/logins"><strong>Iniciar Sesion</strong></a>. Si no estás registrado puedes hacerlo desde acá <a href="/registro"><strong>REGISTRO.</strong></a></div>
 <?php }
 ?>
@endsection
