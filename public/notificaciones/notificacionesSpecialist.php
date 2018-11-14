<?php

include("conexion.php");
$specialistID = $_POST['idSpecialist'];

$sql = "SELECT count(*) as chatsTotal FROM chats WHERE idSpecialist = '$specialistID' AND vistoSpecialist = 0";
$chats = mysqli_query($mysqli, $sql);
$data = mysqli_fetch_assoc($chats);

$sql1 = "SELECT count(*) as propuestasTotal FROM activeproblems WHERE idSpecialist = '$specialistID' AND vistoSpecialist = 0";
$propuestasCant = mysqli_query($mysqli, $sql1);
$data2 = mysqli_fetch_assoc($propuestasCant);

if($data['chatsTotal'] != 0 || $data2['propuestasTotal'] != 0){

  $sql="SELECT * FROM chats WHERE idSpecialist = '$specialistID' AND vistoSpecialist = 0";
  $result = mysqli_query($mysqli, $sql);
  while($chatsNuevos = mysqli_fetch_assoc($result)){
        $idUser = $chatsNuevos['idUser'];
        $sql1 = "SELECT * FROM persons WHERE id = '$idUser'";
        $result1 = mysqli_query($mysqli, $sql1);
              while($user = mysqli_fetch_assoc($result1)){
                  $idProblem = $chatsNuevos['idProblem'];
                  $sql2 = "SELECT * FROM problems WHERE id = '$idProblem'";
                  $result2 = mysqli_query($mysqli, $sql2);
                      while($problema = mysqli_fetch_assoc($result2)){

        echo '
        <div class="dropdown-item" style="background: #e2eff7;">
            <a href="/specialistMsj" style="text-decoration:none;">
            <div class="row">
              <div class="col-md-3">
                  <span style="width:260px;"><img style="height: 58px; width:70px;" src="' . $user['ruta'] . '">
              </div>
              <div class="col-md-9">
                <span style="font-size: 13px;color:black; font-weight:bold;">' . $user['name'] . ' ' . $user['lastName'] . '</span> <span style="font-size: 11px;color:#929292">' . $chatsNuevos['created_at'] . '</span><br>
               <p style="font-size: 15px;margin-top:5px;color:#4e4d4d;"><strong>' . $user['name'] . '</strong> te habló por el problema <br> de <strong>' . $problema['specialty'] . '</strong></span></p>
             </div>
          <div class="dropdown-divider"></div>
        </div></a></div>';
       }
     }
   }

   $sql3="SELECT * FROM activeproblems WHERE idSpecialist = '$specialistID' AND vistoSpecialist = 0";
   $result3 = mysqli_query($mysqli, $sql3);
   while($nuevoContrato = mysqli_fetch_assoc($result3)){
     $idProblem = $nuevoContrato['idProblem'];
     $sql4="SELECT * FROM status WHERE idProblem = '$idProblem'";
     $result4 = mysqli_query($mysqli, $sql4);
     while($estado = mysqli_fetch_assoc($result4)){
        $idUser = $nuevoContrato['idUser'];
        $sql5="SELECT * FROM persons WHERE id = '$idUser'";
        $result5 = mysqli_query($mysqli, $sql5);
        while($users = mysqli_fetch_assoc($result5)){
            if($estado['status'] == 1){

                    echo '<div class="dropdown-item" style="background: #62f372;">
                      <a href="/specialistMsj" style="text-decoration:none;"><div class="row">
                        <div class="col-md-3">
                            <span style="width:260px;"><img style="height: 58px; width:70px;" src="' . $users['ruta'] . '">
                        </div>
                        <div class="col-md-9">
                          <span style="font-size: 13px;color:black; font-weight:bold;">' . $users['name'] . ' ' . $users['lastName'] . '</span> <span style="font-size: 11px;color:#929292">' . $nuevoContrato['updated_at'] . '</span><br>
                         <p style="font-size: 15px;margin-top:5px;color:#4e4d4d;">¡¡<strong>' . $users['name'] . '</strong> TE CONTRATÓ!! </strong></span></p>
                       </div>
                    <div class="dropdown-divider"></div>
                  </div></a></div> ';

                  }
                }
              }
            }


}else{
  echo '

 <p class="text-center"><strong>NO</strong><span style="color:gray;"> tienes notificaciones nuevas. </span></p>
';
}
