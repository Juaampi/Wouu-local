<?php
      $user = $_POST['b'];
      if(!empty($user)) {
            comprobar($user);
      }
      /*CAMBIAR DATOS DE LA BASE DE DATOS UNA VEZ EN EL HOSTING */

      function comprobar($b) {
        $mysqli = new mysqli("localhost", "root", "", "wou");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $sql = "SELECT * FROM specialists WHERE email = '$b'";
        $result = $mysqli->query($sql);
            if ($result->num_rows == 0){
                  echo "<span style='color:green;'><img height='40' src='../img/check.ico'/>El email ingreso es correcto ! </span>";
            }else{
                  echo "<span style='color:red;'><img height='40' src='../img/error.png'/>El email ingresado ya se encuentra en uso !</span>";
            }
      }
?>
