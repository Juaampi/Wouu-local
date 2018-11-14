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
                $sql = "SELECT * FROM persons WHERE username = '$b'";
                    $result = $mysqli->query($sql);
                        if ($result->num_rows == 0){
                            echo "<span style='color:red'><img height='40' src='../img/error.png'/ >El E-mail ingresado es INCORRECTO. Vuelve a intentar con otro o <a style='color:red;font-weight:bold;' href='/registro'>REGISTRATE</a> </span>";
                        }else{
                            echo "<span style='color:green'><img height='40' src='../img/check.ico'/>El Email es correcto. Ingrese la contraseña</span>";
                        }
            }else{
                  echo "<span style='color:green'><img height='40' src='../img/check.ico'/>El Email es correcto. Ingrese la contraseña</span>";
            }
      }
?>
