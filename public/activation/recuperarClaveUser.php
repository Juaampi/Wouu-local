<?php 

include("conexion.php");

$serial = $_GET['serial'];
$email = $_GET['email'];

$sql="SELECT * FROM persons WHERE email = '$email' ";

$result = $conn->query($sql);

while($person = $result->fetch_assoc()){
$id = $person['id'];
}

$sql2 = "UPDATE persons SET password = '$serial' WHERE id = '$id'";

$result1 = $conn->query($sql2);

echo "<script type='text/javascript'>alert('Se ah realizado con éxito su recupero de contraseña. Vuelva a ingresa con la contraseña.');</script>";

echo"<script>location.href ='http://www.wouu.com.ar'</script>";