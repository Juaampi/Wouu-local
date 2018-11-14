

<?php
include("conexion.php");

$userID = $_POST['idUser'];

$sql = "SELECT count(*) as chatsTotal FROM chats WHERE idUser = '$userID' AND visto = 0";
$chats = mysqli_query($mysqli, $sql);
$data = mysqli_fetch_assoc($chats);

$sql1 = "SELECT count(*) as propuestasTotal FROM activeproblems WHERE idUser = '$userID' AND visto = 0";
$propuestasCant = mysqli_query($mysqli, $sql1);
$data2 = mysqli_fetch_assoc($propuestasCant);

if($data['chatsTotal'] != 0 || $data2['propuestasTotal'] != 0){

  $sql="SELECT * FROM chats WHERE idUser = '$userID' AND visto = 0";
  $result = mysqli_query($mysqli, $sql);
  while($chatsNuevos = mysqli_fetch_assoc($result)){
        $idSpecialist = $chatsNuevos['idSpecialist'];
        $sql1 = "SELECT * FROM specialists WHERE id = '$idSpecialist'";
        $result1 = mysqli_query($mysqli, $sql1);
              while($specialist = mysqli_fetch_assoc($result1)){
                  $idProblem = $chatsNuevos['idProblem'];
                  $sql2 = "SELECT * FROM problems WHERE id = '$idProblem'";
                  $result2 = mysqli_query($mysqli, $sql2);
                      while($problema = mysqli_fetch_assoc($result2)){

                        echo '<div class="dropdown-item" style="background: #e2eff7;margin-top:10px;">
                          <a href="/userMsj" style="text-decoration:none;"><div class="row">
                            <div class="col-md-3">
                                <span style="width:260px;"><img style="height: 58px; width:70px;" src="' . $specialist['ruta'] . ' ">
                            </div>
                            <div class="col-md-9">
                              <span style="font-size: 13px;color:black; font-weight:bold;">' . $specialist['name'] . ' ' . $specialist['lastName'] . ' </span> <span style="font-size: 11px;color:#929292">' . $chatsNuevos['created_at'] . '</span><br>
                             <p style="font-size: 15px;margin-top:5px;color:#4e4d4d;"><strong>' . $specialist['name'] . '</strong> te habló por el problema <br> de <strong>' . $problema['specialty'] . '</strong></span></p>
                           </div>
                        <div class="dropdown-divider"></div>
                      </div></a></div>';


                    }
              }
  }


  $sql3 = "SELECT * FROM activeproblems WHERE idUser = '$userID' AND visto = 0";
  $result3 = mysqli_query($mysqli, $sql3);
    while($propuestas = mysqli_fetch_assoc($result3)){
        $idSpecialist = $propuestas['idSpecialist'];
        $sql4 = "SELECT * FROM specialists WHERE id = '$idSpecialist'";
        $result4 = mysqli_query($mysqli, $sql4);
        while($specialistPropuesta = mysqli_fetch_assoc($result4)){
          $idProblem = $propuestas['idProblem'];
          $sql5 = "SELECT * FROM problems WHERE id = '$idProblem'";
          $result5 = mysqli_query($mysqli, $sql5);
            while($problems = mysqli_fetch_assoc($result5)){

          echo '<div class="dropdown-item" style="background: #fde7ed;margin-top:10px;">
            <a href="/userMsj" style="text-decoration:none;"><div class="row">
              <div class="col-md-3">
                  <span style="width:260px;"><img style="height: 58px; width:70px;" src="' . $specialistPropuesta['ruta'] . '">
              </div>
              <div class="col-md-9">
                <span style="font-size: 13px;color:black; font-weight:bold;">' . $specialistPropuesta['name'] . ' ' . $specialistPropuesta['lastName'] . ' </span> <span style="font-size: 11px;color:#929292">' . $propuestas['created_at'] . '</span><br>
               <p style="font-size: 15px;margin-top:5px;color:#4e4d4d;"><strong>' . $specialist['name'] . '</strong> te envió una <strong>propuesta</strong> por el problema <br> de <strong>' . $problems['specialty'] . '</strong></span></p>
             </div>
          <div class="dropdown-divider"></div>
        </div></a></div>';

      }
    }
  }


}else{
    echo '

   <p class="text-center"><strong>NO</strong><span style="color:gray;"> tienes notificaciones nuevas. </span></p>
  ';
  }

 ?>
