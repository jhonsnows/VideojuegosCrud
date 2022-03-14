<?php

$servername = "localhost";
$database = "crud";
$username = "root";
$password = "unad2021";

// Creamos la conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

// Comprobamos la conexión a la BD
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
echo "Conexión satisfactoria a la BD";

// Tomando valores desde el formulario

$genero = $_REQUEST['Genero'];
$nombrejuego = $_REQUEST['NombreJuego'];
$fechalanzamiento = $_REQUEST['FechaLanzamiento'];
$tipoconsola = $_REQUEST['TipoConsola'];
$desarrollador =  $_REQUEST['Desarrollador'];

//Insertar valores en BD
$insertar_sql = "INSERT INTO games (name,genero,console,añolanzamiento,desarrollador) VALUES ('$nombrejuego','$genero','$tipoconsola','$fechalanzamiento','$desarrollador')"; 
mysqli_query($conexion, $insertar_sql);

// cerrar conexión de base de datos
mysqli_close( $conexion );

// Confirmamos que el registro ha sido insertado con exito   
echo "   
<p>Los datos han sido guardados con exito.</p>   

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>   
";
