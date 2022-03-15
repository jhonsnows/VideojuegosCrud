<?php
// Creamos la conexión

$servername = "localhost";
$database = "crud";
$username = "root";
$password = "unad2021";

$conexion = mysqli_connect($servername, $username, $password, $database);


$ID = $_POST['id'];
mysqli_query($conexion, "DELETE FROM games where id='$ID'") or die("Error al eliminar");

mysqli_close($conexion);
header("location:leer.php");
