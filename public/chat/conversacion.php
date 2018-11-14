
<html>
<body>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato|Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=KoHo" rel="stylesheet">
	</head>
</body>
</html>
<?php
	include "conexion.php";

    $idEmisor = $_POST['idEmisor'];
    $idReceptor = $_POST['idReceptor'];
    $idProblem = $_POST['idProblem'];

	$sql = "SELECT * FROM chats WHERE idProblem = '$idProblem' order by created_at asc";
	$result = mysqli_query($mysqli, $sql); // Agarramos todos los chats del problema ordenados

	$sql4 = "UPDATE chats SET visto='1' WHERE idProblem='$idProblem'";
	mysqli_query($mysqli, $sql4);// Ni bien entra a la conversacion ponemos en visto todos los chats.

	$sql5 = "UPDATE activeproblems SET visto='1' WHERE idProblem='$idProblem'";
	mysqli_query($mysqli, $sql5);//Ahora ponemos en visto todos las propuestas una vez vistas en el chat.

	while($data = mysqli_fetch_assoc($result)){
		 if($data['type'] == 2){
	        	$sql2 = "SELECT * FROM persons WHERE id = '$idEmisor'";
	            $result2 = mysqli_query($mysqli, $sql2);
                $user = mysqli_fetch_assoc($result2);
								?>
                <div style="text-align:right;"><p style="border-radius: 5px;font-size: 14px;font-weight:bold;margin-bottom: -1px;"><?php echo $user["name"] . ' ' . $user['lastName']?></p><div style="display: inline-block;"><p style="font-size: 18px; font-family: 'KoHo', sans-serif;padding: 10px;text-align:right;width:100%;background:#ffd0df;border-radius: 5px;"><?php echo $data["msj"]?><?php if($data['vistoSpecialist'] == 0){?><img style="margin-left:7px;height:20px;" src="../img/check.png"> <?php }else{ ?><img style="margin-left: 7px;height:20px;" src="../img/doble-check.png"> <?php } ?><br><span style="color:gray;font-size:10px;margin-bottom:-5px;font-weight:bold;"><?php echo $data['created_at'] ?></span></p></div></div>
	    <?php }else{
    	        $sql3 = "SELECT * FROM specialists WHERE id = '$idReceptor'";
	            $result3 = mysqli_query($mysqli, $sql3);
                $specialist = mysqli_fetch_assoc($result3);?>
                <div><p style="border-radius:5px;font-size: 14px; font-weight:bold; margin-bottom: -1px;"><?php echo $specialist["name"] . ' ' . $specialist['lastName'] ?> <div style="display: inline-block;"><p style="font-size: 18px; font-family: 'KoHo', sans-serif;padding: 10px;width:100%;background:#dbecf5;border-radius: 5px;"><?php echo $data["msj"] ?> <br><span style='float: left;color:gray;font-size:10px;margin-top:5px;font-weight:bold;'><?php echo $data['created_at'] ?></span></p></div></div>
<?php
	    }
	}

 ?>
