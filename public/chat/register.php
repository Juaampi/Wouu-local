<?php 
	include "conexion.php";
    
    $idEmisor = $_POST['idEmisor'];
    $idReceptor = $_POST['idReceptor'];
    $idProblem = $_POST['idProblem'];
	$message = $_POST['message'];
	$date = date('Y-m-d H:i:s');
	
    
	$sql = "INSERT INTO chats (idProblem, idUser, idSpecialist, msj, updated_at, created_at, type, visto, vistoSpecialist) VALUES ($idProblem, $idEmisor , $idReceptor, '$message', '$date' , '$date', 2, 0, 0)";
	$result = mysqli_query($mysqli, $sql);
	
	if ($result) {
		echo "MENSAJE ENVIADO";
	}
	else{
		echo $message;
	}
	
 ?>