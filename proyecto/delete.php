<?php
// Creamos la conexión

$servername = "localhost";
$database = "crud";
$username = "root";
$password = "unad2021";

$conexion = mysqli_connect($servername, $username, $password, $database);

//Variable "ID" enviada por metodo post al presionar el boton Eliminar.
//Se hace la consulta en la base de datos y se elimina la fila indicada en el valor "id"

$ID = $_POST['id'];
mysqli_query($conexion, "DELETE FROM games where id='$ID'") or die("Error al eliminar");

//cerrar conexion
mysqli_close($conexion);
//redirigir a pagina "leer.php"
header("location:leer.php");
