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
        if (isset($_REQUEST['btn_crear'])){
            if (isset($_FILES['image']['name'])) {
                $tamanoArchivo = $_FILES['image']['size'];
                $imagenSubida = fopen($_FILES['image']['tmp_name'], 'r');
                $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                $imagen = mysqli_escape_string($conxion, $binariosImagen);
            }
        }else{
            echo"error de subida";
        }
        try{
            if(empty($nombre) || empty($des) || empty($consola) ||   empty($lanzamiento) ||  empty($jugadores) ||  empty($_FILES['image'])){
                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    Error 
                                </div>
                    <?php
                }else{
                //se hace la consulta a sql
                    $sql = "INSERT INTO games (name, descrip, console, ryear, nplayers, image ) VALUES ('$nombre','$des','$consola','$lanzamiento','$jugadores', '$imagen');";
                    $ejecutar=mysqli_query($link,$sql);
                    if($ejecutar){
                        echo"creó";
                    }
                }
            
        } catch   (Exception $e){
            
        }
       
?>
 