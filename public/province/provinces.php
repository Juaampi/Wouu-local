<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','asyste3','8e3BGuwo8EH7','asyste3_wouu');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT ciudad FROM ciudades WHERE provincia = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<select name='ciudad' class='form-control'>";
while($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row['ciudad'] . '">' . $row['ciudad'] . '</option>';
}
echo "</select>";
mysqli_close($con);
?>
</body>
</html>