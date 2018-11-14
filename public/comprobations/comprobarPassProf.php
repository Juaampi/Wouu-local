<?php

      $user = $_POST['b'];


      if(!empty($user)) {
            comprobarPass($user);
      }
      /*CAMBIAR DATOS DE LA BASE DE DATOS UNA VEZ EN EL HOSTING */

      function comprobarPass($b) {
        $id = $_POST['id'];
        $mysqli = new mysqli("localhost", "root", "", "wou");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $sql = "SELECT * FROM specialists WHERE password = '$b' AND id = '$id'";
        $result = $mysqli->query($sql);
            if ($result->num_rows == 0){
              echo '<span style="color:red">La contraseña es incorrecta</span>';
              echo '<script>
                    $(document).ready(function(){
                        document.getElementById("pass").style.background = "red";
                        document.getElementById("pass").style.color = "white";
                        document.getElementById("newpass").readOnly = true;
                        document.getElementById("newpassconfirm").readOnly = true;
                    });
              </script>';
            }else{

                  echo '<span style="color:green">La contraseña es correcta</span>';
                  echo '<script>
                        $(document).ready(function(){
                            document.getElementById("pass").style.background = "green";
                            document.getElementById("pass").style.color = "white";
                            document.getElementById("newpass").readOnly = false;
                            document.getElementById("newpassconfirm").readOnly = false;
                        });
                  </script>';
            }
      }
?>
