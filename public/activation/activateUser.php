<?php 

include("conexion.php");

$serial = $_GET['serial'] ;

$sql="SELECT * FROM persons WHERE confirmcode = '$serial' ";

$result = $conn->query($sql);

while($person = $result->fetch_assoc()){
$id = $person['id'];
}

$sql2 = "UPDATE persons SET activate = 1 WHERE id = '$id'";

$result1 = $conn->query($sql2);

echo "<script type='text/javascript'>alert('Validaci¨®n de E-mail realizada con ¨¦xito. Ahora puede disfrutar de los servicios de wou ! Bienvenido! ');</script>";

echo"<script>location.href ='http://www.wouu.com.ar'</script>";



