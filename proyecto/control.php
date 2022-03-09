<?php
    if(isset($_REQUEST['btn_crear']))
         //se hace conexión a base de datos

        include("conexion.php");

        //se declaran las variables
        $nombre=$_POST['name'];
        $des=$_POST['descrip'];
        $consola=$_POST['console'];
        $lanzamiento=$_POST['ryear'];
        $jugadores=$_POST['nplayers'];
        $imagen=$_POST['image'];
        //se hace la consulta a sql
        $sql = "INSERT INTO games (name, descrip, console, ryear, nplayers, image ) VALUES ('$nombre','$des','$consola','$lanzamiento','$jugadores', '$image');";
        $ejecutar=mysqli_query($link,$sql);

        if($ejecutar){
            echo"creó";
        }


?>