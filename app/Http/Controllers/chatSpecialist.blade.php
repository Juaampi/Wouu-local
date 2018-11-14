<?php

use App\Specialist;
use App\Problem;
use App\Person;
use App\Status;
use App\Chat;
use App\activeProblem;

$idProblem = $_POST['idProblem'];

if(Session::has('username')){
  $specialist = Specialist::where('email','=',Session('username'))->get();
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
    <title>Wou! - CHAT</title>
    </head>
    <body>
         <body style="background-image: url('../img/fondo.jpg')";>

<div class="row" style="margin:0;width: 100%;background: white; min-height: 110px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;">
    <div class="col-md-6">
        <a href="../index.php"><img src="../img/logo.png" style="margin-top: 20px" height="70" width="350" /></a>
    </div>
    <div class="col-md-3" style="margin-top: 40px;font-family: 'Roboto', sans-serif ">
    <table>
        <tr><a href="views/specialistList.php" style="color:#bd2d5d;margin-right: 30px;">PROFESIONALES</a></tr>
        <tr><a href="#" style="color:#bd2d5d;">CONTACTO</a></tr>
    </table>
    </div>
    <div class="col-md-3" style="margin-top: 4px;font-family: 'Roboto', sans-serif;">
        <div class="container">
            <div class="row" style="float:right;" >
                <div style="display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;">
                    <img height="80" width="80" src="{{ $specialist[0]['ruta']}}">
                     <div class="btn-group">
                         <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   {{ $specialist[0]['name'] . '  ' . $specialist[0]['lastName'] }}
  </button><div class="dropdown-menu">
    <a class="dropdown-item" href="/specialistPanel">Perfil</a>
    <a class="dropdown-item" href="/specialistMsj">Mensajes</a>
    <a class="dropdown-item" href="#">Cambiar contraseña</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/logout">Cerrar sesión</a>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br><br><br>
    <?php  if($activeProblem->isEmpty()){
                  echo '<div class="alert alert-danger">No haz enviando nada...</div>';
              }else{
                  ?>
                  <div class="container">
                    <div class="col-md-12">
                     <div class="card" style="max-width: 60rem;">
                     <div class="card-header" style="font-size: 30px">
                        <?php
                        $user = Person::where('id','=',$activeProblem[0]['idUser'])->get();
                        echo $user[0]['name'] . ' ' . $user[0]['lastName'] ?>
                    </div>
<div class="card-body">
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

    <h5 class="card-title">{{ $specialist[0]['name'] . ' ' . $specialist[0]['lastName'] . ' ' }}</h5>
    <h6 class="text-muted">{{ $activeProblem[0]['created_at'] }} </h6>
    <p class="card-text">{{ $activeProblem[0]['msj'] }}</p>

    <?php
    if($chat->isEmpty()){
        echo '<div class="alert alert-danger">Éste chat no tiene respuestas</div>';
    }else{
        for ($i = 0; $i<count($chat); $i++){
             if ($chat[$i]['type'] == 3){ ?>
    <div class="alert-success text-center">{{ $user[0]['name'] }}</div>

             <?php } if ($chat[$i]['type'] == 2){ ?>
    <div class="alert-danger text-center">{{ $specialist[0]['name'] }} </div>
              <?php } ?>

    <p class="text-muted"> {{ $chat[$i]['created_at'] }}</p>
    <p> {{ $chat[$i]['msj'] }}</p>
    <?php }} ?>
    <form action="/sendChatSpecialist" method="GET">
        <textarea name="msj" class="form-control" placeholder="Escribir respuesta" required></textarea><br><br>
        <input type="hidden" name="idUser" value="{{ $activeProblem[0]['idUser'] }}" />
        <input type="hidden" name="idSpecialist" value="{{ $activeProblem[0]['idSpecialist'] }}" />
        <input type="hidden" name="idProblem" value="{{ $activeProblem[0]['idProblem'] }}" />
        <input type="submit" class="btn btn-primary" />
        <a href="/specialistMsj" class="btn btn-danger"> <-- Volver a la casilla </a>
    </form>
        </div></div>
    </div>
</div>
<?php } ?>
</body>
</html>
<?php }} ?>
