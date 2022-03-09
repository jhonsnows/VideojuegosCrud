<?php
    /*se declaran las variables para la conexión de base de datos */
    define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'crud');
	 
	/* Se genera la conexión  */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	 
	// Se verifica si no hay error en la conexión
	if($link === false){
	    die("ERROR DE CONEXIÓN " . mysqli_connect_error());
<<<<<<< HEAD
	}else{
		echo"conectado";
=======
>>>>>>> a99ec893d6a99d91dfd19f0aafd667e316ff7115
	}
?>