@extends('menu')
@section('cuerpo')



<?php

use App\Problem;
use App\Specialist;
use App\Person;
use App\Chat;
use App\activeProblem;

if(Session::has('username')){
  $specialist = Specialist::where('email','=',Session('username'))->get();
  $mensajes = activeProblem::where('idSpecialist','=',$specialist[0]['id'])->orderby('created_at', 'DESC')->get();
    if($mensajes->isEmpty()){
        echo'<div class="alert-danger" role="alert"> Usted no tiene ningún mensaje</div>';
    }else{

?>

<!DOCTYPE html>
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
    <title>Wou! - Casilla de mensajes</title>
    </head>
   <body style="background: #ececec;">
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

<br><br><br><br>
<div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Perfil</th>
      <th scope="col">Necesita</th>
      <th scope="col">Mensaje</th>
    </tr>
  </thead>
  <tbody>
    <?php for($i = 0; $i<count($mensajes); $i++){
      $usuario = Person::where('id', '=', $mensajes[$i]['idUser'])->get();
      ?>
<tr>
      <td><img style="border-radius:10px;height:60px;width:81px;" src="{{ $usuario[0]['ruta'] }}"><br>{{ $usuario[0]['name'] . ' ' . $usuario[0]['lastName']}}</td>
      <td>{{ $specialist[0]['specialty'] }}</td>
      <td>{{ $mensajes[$i]['msj']}}</td>
      <td><form action="/chatSpecialist" method="POST">
          <input type="hidden" name="idProblem" value="{{$mensajes[$i]['idProblem']}}" />
               <input type="hidden" value="{{csrf_token()}}" name="_token" >
          <input type="submit" class="btn btn-outline-primary" value="Ver problema completo" />
        </form>
       </td>
    </tr>
    <?php } ?>
  </tbody>
</table></div>
  </body>
</html>
<?php }
}else{?>
  <div class="alert-danger" role="alert"> Para ponerte en contacto con un cliente, debes ser un especialista.Si eres uno debes <a href="/logins"><strong>Iniciar Sesion</strong></a>. Si no estás registrado puedes hacerlo desde acá <a href="/registro"><strong>REGISTRO.</strong></a></div>
<?php } ?>
@endsection
