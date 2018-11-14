<?php
include("conexion.php");
$idUser = $_POST['idUser'];

$sql = "SELECT count(*) as chatsTotal FROM chats WHERE idUser = '$idUser' AND visto = 0";
$chats = mysqli_query($mysqli, $sql);
$data = mysqli_fetch_assoc($chats);

$sql1 = "SELECT count(*) as propuestasTotal FROM activeproblems WHERE idUser = '$idUser' AND visto = 0";
$propuestasCant = mysqli_query($mysqli, $sql1);
$data2 = mysqli_fetch_assoc($propuestasCant);

if($data['chatsTotal'] != 0 || $data2['propuestasTotal'] != 0){
  $cant = $data['chatsTotal']+$data2['propuestasTotal'];
  echo $cant;
}else{
echo '';
}
