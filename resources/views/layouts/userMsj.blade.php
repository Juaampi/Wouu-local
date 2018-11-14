@extends('menu')
@section('cuerpo')


<?php
use App\Problem;
use App\Specialist;
use App\Person;
use App\Chat;
use App\activeProblem;

if(Session::has('username')){
  $user = Person::where('email','=',Session('username'))->get();
  $mensajes = activeProblem::where('idUser','=',$user[0]['id'])->orderby('created_at', 'DESC')->get();


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


<br><br><br><br>
<?php
 if($mensajes->isEmpty()){
        echo'<div class="alert alert-danger" role="alert"> Usted no tiene ningún mensaje en su casilla </div>';
    }else{

?>

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
      $specialist = Specialist::where('id', '=', $mensajes[$i]['idSpecialist'])->get();

      ?>
      <style>
      .table td{
        vertical-align: middle;
      }
      </style>
<tr >
      <td><img style="border-radius:10px;height:80px;width:81px;" src="{{ $specialist[0]['ruta'] }}"><br>{{$specialist[0]['name'] . ' ' . $specialist[0]['lastName']}}</td>
      <td><span style="font-weight:bold;">{{ $specialist[0]['specialty'] }}</span></td>
      <td>{{ $mensajes[$i]['msj']}}</td>
      <td><form action="/chatUser" method="POST">
          <input type="hidden" name="idProblem" value="{{$mensajes[$i]['idProblem']}}" />
               <input type="hidden" value="{{csrf_token()}}" name="_token" >
          <input type="submit" class="btn btn-danger" value="Abrir chat" />
        </form>
       </td>
</tr>
    <?php } ?>
  </tbody>
</table>
</div>

  <footer>
        <div id="footer" class="row" style="">
          <div class="col-md-4">
          </div>
            <div class="col-md-5" style="padding: 15px;margin-left: 50px;">
                <a href="#"><img height="60" src="img/snap.png" /></a>
                <a href="#"><img height="60" src="img/fb.png" /></a>
                <a href="#"><img height="60" src="img/wpp.png" /></a>
                <a href="#"><img height="60" src="img/insta.png" /></a>
                <a href="#"><img height="60" src="img/tw.png" /></a>
            </div>
        </div>
    </footer>
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
            position: fixed;
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
  </body>
</html>
<?php }
}else{?>
  <div class="alert-danger" role="alert"> Para ponerte en contacto con un cliente, debes ser un especialista.Si eres uno debes <a href="/logins"><strong>Iniciar Sesion</strong></a>. Si no estás registrado puedes hacerlo desde acá <a href="/registro"><strong>REGISTRO.</strong></a></div>
<?php } ?>
@endsection
