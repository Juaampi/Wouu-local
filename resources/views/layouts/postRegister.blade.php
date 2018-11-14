<html>
<head>
    <link rel="shortcut icon" href="../img/ico.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Wouu! - Registro exitoso</title>
</head>

<body>
<script>
  swal({
   icon: "success",
  title: "¡Se ha registro exitósamente!",
  text: "Ahora con su E-mail y su contraseña va a poder ingresar a la plataforma y disfrutar de los servicios de WOUU!",
  button: "Ingresar ahora",
  showConfirmButton: true,
  confirmButtonText: "Cerrar",
  closeOnConfirm: false
}). then(function(result){
  window.location = "logins";
             })
</script>
    </body>
</html>
