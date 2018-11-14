@extends('menu')
@section('cuerpo')
<html>
<head>
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
  <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <title>Wou!</title>
</head>

</style>
<body  style="background: #dce8e6;" >

<?php include("menu/menu.php");
?>
<br><br><br><br><br>

<div class="col-xs-12">
    <div class="container">
    <div class="center-block">
<div class="card" style="width: 30rem;margin:0 auto;box-shadow: 2px 2px 7px 4px #888888">
  <div class="card-body" style="padding: 40px;">
    <form action="/loguearse" method="GET" style="margin:0 auto">
            <img src="../img/user.png" style="display:block; margin: 0 auto;margin-top: -40px; height: 71px;"/><br><br>
            <input style="height: 56px; background: #d8d9dd" class="form-control" id="username" type="text" name="username" placeholder="Ingrese su Email"/><div id="resultUsername"></div><br>
            <input style="height: 56px; background: #d8d9dd" class="form-control"  type="password" name="password" placeholder="Contraseña"/><br><br>
            <input type="image" height=45 src="../img/login.png" style="display:block; margin:0 auto" alt="Submit Form" /><br>
        </form>
        <p style="text-align:center; color:black; font-size: 20px;" >No tenés usuario?  <a href="/registro" style="color:blue">Registrarme</a></p>
        <a data-toggle="modal" data-target="#password" style="color:red;"><p style="text-align:center">Olvidé mi contraseña</p></a>
  </div>
</div></div>
</div>
</div>







<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Olvidaste tu contraseña en Wouu! ? </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="container">
<p>No te preocupes. Wouu la recupera por vos. Escribí la casilla de correo electronico que utilizaste para tu cuenta y te enviaremos una nueva contraseña para que puedas volver a ingresar.
<form id="formPassword" class="form-group" action="/recuperarClave" method="GET" enctype="multipart/form-data" >
<div class="alert alert-warning" role="alert">Debe ser una cuenta de correo electronico válida.</div>
<input type="text" class="form-control" name="email" placeholder="Ejemplo: wou@gmail.com" aria-describedby="basic-addon1" required /><br>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
<input id="confirmar" type="submit" class="btn btn-primary" value="Enviarme la contraseña">
</form>
</div>
</div>
</div>
</div>


  <script>
    $(document).ready(function(){

      var consulta;

      //hacemos focus
      $("#username").focus();

      //comprobamos si se pulsa una tecla
      $("#username").change(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#username").val();

             //hace la búsqueda
             $("#resultUsername").delay(2).queue(function(n) {

                  $("#resultUsername").html('<img src="../img/ajax-loader.gif" />');

                        $.ajax({
                              type: "POST",
                              url: "comprobations/comprobarUsername.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#resultUsername").html(data);
                                    n();
                              }
                  });
             });
      });
});
    </script>



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
        <div id="footer" class="row" style="box-shadow: 4px 7px 14px 7px #888888">
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
</html>
@endsection
