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
        $sql = "SELECT * FROM specialists WHERE username = '$b'";
        $result = $mysqli->query($sql);
            if ($result->num_rows == 0){
                  echo "<span><img height='40' src='../img/check.ico'/></span>";
            }else{
                  echo "<span><img height='40' src='../img/error.png'/></span>";
            }
      }
?>
