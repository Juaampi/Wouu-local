<?php

use App\Problem;
use App\Status;
use App\Person;
use App\Specialist;
use App\activeProblem;

$idSpecialist = $_GET['idSpecialist'];
$specialists = Specialist::find($idSpecialist)->get();

?>
<html>
<head>
    <link rel="shortcut icon" href="img/ico.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <title>Wou!</title>
</head>
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
<body style="background: #dce8e6;">


<div class="row" style="margin:0;width: 100%;background: white; min-height: 80px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;">
    <div class="col-md-6">
        <a href="../index.php"><img src="img/logo.png" style="margin-top: 20px" height="52" width="150" /></a>
    </div>
    <div class="col-md-3" style="margin-top: 40px;font-family: 'Roboto', sans-serif ">

    </div>


  <div class="col-md-3" style="margin-top: 20px;font-family: 'Roboto', sans-serif;">
      <div class="container" style="width: 100%;">
          <div class="row vdivide" style="float:right;" >
                  <a href="/logins" style="color:white;"><img height=45 src="../img/ingreso.png" /> </a>
          </div>
      </div>
  </div>
</div>
</div><br><br><br><br><br><br>
  <h3 style="text-align:center">Estamos por enviar tu contrato! - Por favor completa el formulario para enviarlo ! </h3><br>
<div class="container">
<div class="row">
    <div class="col-xs-8 col-md-8">
        <div class="card" style="box-shadow: 2px 2px 7px 4px #888888">
            <h5 class="card-header">Datos de contacto</h5>
            <div class="card-body">

<form id="form-not-register" action="/enviarPreContrato" method="POST">
    <div class="form-group">
    <label for="exampleInputEmail1">Nombre Completo</label>
    <input type="text" name="name" class="form-control" aria-describedby="Nombre" placeholder="Nombre completo que figura en su documento" required>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Apellido Completo</label>
    <input type="text" name="lastName" class="form-control" aria-describedby="Apellido" placeholder="Apellido que figura en su documento"required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Direccion de E-mail</label>
    <input type="email" name="email" class="form-control" id="emailUser" aria-describedby="emailHelp" placeholder="Luego del registro será su nombre de usuario" required><div class="text-center" id="resultEmail" ></div>
    <small id="emailHelp" class="form-text text-muted">Ésta dirección de E-mail debe ser verdadera, para la confirmación de la cuenta.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ingrese una contraseña</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña para el ingreso al sitio web" required>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Ingrese su número telefónico</label>
    <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="+54 9 223 5 648454">
  </div>
  <input type="hidden" name="idSpecialist" value="{{$specialists[0]['id']}}" />
 <input type="hidden" value="{{csrf_token()}}" name="_token" >

<input type="image" height=45 src="../img/enviar.png" style="display:block; margin:0 auto" alt="Submit Form" /><br>
</form>

            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="box-shadow: 2px 2px 7px 4px #888888">
        <h5 class="card-header">Datos de profesional</h5>
        <div class="card-body">
            <h5 class="card-title">Nombre: {{$specialists[0]['name'] . $specialists[0]['lastName']}}</h5>
            <p class="card-text">Especialidad: {{$specialists[0]['specialty']}}</p>
            <p class="card-text">En la zona de <strong>{{$specialists[0]['city']}}</strong></p>

  </div>
</div>
    </div>
</div>
</div>



   <script>
    $(document).ready(function(){

      var consulta;

      //hacemos focus
      $("#emailUser").focus();

      //comprobamos si se pulsa una tecla
      $("#emailUser").change(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#emailUser").val();

             //hace la búsqueda
             $("#resultEmail").delay(200).queue(function(n) {

                  $("#resultEmail").html('<img src="../img/ajax-loader.gif" />');

                        $.ajax({
                              type: "POST",
                              url: "/comprobations/comprobarEmail.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#resultEmail").html(data);
                                    n();
                              }
                  });
             });
      });
});
    </script>





</body>
</html>
