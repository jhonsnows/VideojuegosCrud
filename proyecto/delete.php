<?php
// Creamos la conexión

$servername = "localhost";
$database = "bancomysavingsweb";
$username = "root";
$password = "unad2021";

$conexion = mysqli_connect($servername, $username, $password, $database);


$ID=$_POST['doc_ID'];
mysqli_query($conexion,"DELETE FROM registro_persona where nro_doc='$ID'")or die("Error al eliminar");

mysqli_close($conexion);
header("location:admin_home.php");

?>