<?php 

include("conexion.php");

$serial = $_GET['serial'] ;

$sql="SELECT * FROM specialists WHERE confirmcode = '$serial' ";

$result = $conn->query($sql);

while($specialist = $result->fetch_assoc()){
$id = $specialist['id'];
$specialty = $specialist['specialty'];

}




if($specialty == 'Abogado' || $specialty == 'Acompañante terapéutico' || $specialty == 'Gasista' || $specialty == 'Martillero público' || $specialty == 'Plomero'
|| $specialty == 'Escribano' || $specialty == 'Electricista' || $specialty == 'Terapista ocupacional' || $specialty == 'Arquitecto' || $specialty == 'Gestor' ){

$sql2 = "UPDATE specialists SET  activate = 1 WHERE id = '$id'";

$result1 = $conn->query($sql2);

$email_to = "administracion@wouu.com.ar";
	    $email_subject = "Validacion de profesión";
	    $email_from = "administracion@wouu.com.ar";
        $email_message = "Para validar su práctica profesional de " . $specialty . " debe responder éste email con un archivo adjunto de los títulos habilitantes (Matrícula, título, etc.) en formato digital (imagen, archivo de texto, PDF).  \n\n Y esperar la respuesta por parte de la administración de WOUU \n\n Muchas gracias por confiar en nosotros ! ";			   
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
	
	echo "<script type='text/javascript'>alert('Validación de E-mail realizada con éxito. Debe revisar su casilla de E-mail para verificar los datos de profesión !  ');</script>";

echo"<script>location.href ='http://www.wouu.com.ar'</script>";
	
}else{

$sql3 = "UPDATE specialists SET activate = 2 WHERE id = '$id'";
$result2 = $conn->query($sql3);

echo "<script type='text/javascript'>alert('Validación de E-mail realizada con éxito. Ahora puede disfrutar de los servicios de wou ! Bienvenido! ');</script>";

echo"<script>location.href ='http://www.wouu.com.ar'</script>";

}




