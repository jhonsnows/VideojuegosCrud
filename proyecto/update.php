<!DOCTYPE html>
<html style="font-size: 16px">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <script src="../librerias/materialize/jquery-3.4.0.min.js"></script>
    <script src="../librerias/materialize/js/materialize.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Administracion</title>
    <link rel="stylesheet" href="estilos.css" media="screen" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body class="container">
    <div class="container-fluid" aling="center">
        <div class="formulario">
            <a class="btn btn-primary" href="index.php">INICIO</a>
            <a class="btn btn-primary" href="crear.php">CREAR</a>
            <a class="btn btn-primary" href="leer.php">LEER</a>


            <!-- Inicia codigo actualizar videojuego-->

            <?php
            // Creamos la conexión

            $servername = "localhost";
            $database = "crud";
            $username = "root";
            $password = "unad2021";

            $conexion = mysqli_connect($servername, $username, $password, $database);

            //Tomando datos actuales por ID desde la base de datos

            if (isset($_GET['id'])) {

                $id = $_GET['id'];

                //Consulta SQL para seleccionar la fila coincidente con el valor id

                $sql = "SELECT * FROM games WHERE id = '$id'";

                //Se hace la consulta a la BD
                $resultado = mysqli_query($conexion, $sql);

                //Esta funcion obtiene el numero de filas de la consulta realizada
                if (mysqli_num_rows($resultado) > 0) {

                    //Esta funcion guarda los datos obtenidos de la consulta en indices asociativos
                    $row = mysqli_fetch_array($resultado);

                    //Cada fila obtenida de la base de datos es asignada a una variable que se utilizara en el formulario de actualizacion
                    $id = $row['id'];
                    $genero = $row['genero'];
                    $nombrejuego = $row['name'];
                    $fechalanzamiento = $row['añolanzamiento'];
                    $tipoconsola = $row['console'];
                    $desarrollador =  $row['desarrollador'];
                }
            }
            ?>
            <!-- Formulario para actualizar datos -->

            <!-- El formulario obtiene y muestra de forma editable los datos obtenidos desde la BD -->
            <!-- Este formulario envia los nuevos datos actualizados manualmente, mediante el metodo post-->
            <h2>Actualización de juego</h2>
            <form action="update.php?id=<?php echo $_GET['id']; ?>" method="post">

                <!-- La variable "id" se muestra en modo solo lectura "readonly" -->
                <!-- Mediante un "echo" se muestra visiblemente el value actual para que sea editado -->

                <p>ID: <br><input type="text" name="id" value="<?php echo $id; ?>" readonly class="form-control-plaintext"></p>
                <p>Nombre del Juego: <br><input type="text" name="NombreJuego" value="<?php echo $nombrejuego; ?>" required></p>

                <p>Género: <br><select name="Genero" value="<?php echo $genero; ?>" required>
                        <option>Acción</option>
                        <option>Arcade</option>
                        <option>Deportivo</option>
                        <option>Estrategia</option>
                        <option>Simulación</option>

                    </select></p>

                <p>Tipo de Consola: <br><select name="TipoConsola" value="<?php echo $tipoconsola; ?>" required>
                        <option>Xbox</option>
                        <option>PlayStation</option>
                        <option>PC</option>
                    </select></p>

                <p>Fecha de Lanzamiento: <br><input type="date" name="FechaLanzamiento" value="<?php echo $fechalanzamiento; ?>" required></p>

                <p>Desarrollador: <br><input type="text" name="Desarrollador" value="<?php echo $desarrollador; ?>" required></p>
                <input type="submit" value="Actualizar" name="update" class="btn btn-success">

                <!-- Boton para volver atrás -->
                <a class="btn btn-dark" href='javascript:history.go(-1)'>Volver</a>


                <br>


            </form>


            <?php

            //Nuevos datos tomados desde el formulario anterior cuando se presiona el boton con value "update"
            //Cada valor recibido es asignado a una variable

            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $genero = $_POST['Genero'];
                $nombrejuego = $_POST['NombreJuego'];
                $fechalanzamiento = $_POST['FechaLanzamiento'];
                $tipoconsola = $_POST['TipoConsola'];
                $desarrollador =  $_POST['Desarrollador'];

                //Nuevos valores a actualizar en la BD
                //Se actualizan los nuevo datos obtenidos desde el formulario de actualizacion y se insertan en la base de datos
                //Asignando cada variable actualizada a su respectiva columna en la table "games"

                $sql = "UPDATE games SET name = '$nombrejuego', genero = '$genero',
    console = '$tipoconsola', añolanzamiento = '$fechalanzamiento', desarrollador = '$desarrollador' WHERE id = '$id'";

                //Se hace la consulta a la BD
                mysqli_query($conexion, $sql);

                if ($resultado == true) {
                    echo "Registros actualizados correctamente";
                } else {
                    echo "Error: " . $sql . "<br>" . $conexion->error;
                }
                mysqli_close($conexion);
                header("location:leer.php");
            }

            ?>



        </div>
        <footer class="pie">
            <div class="pie">
                <h4>GRUPO 5415646_xX</h4>
                <h5>Auto Text es una forma de almacenar partes de un documento de Word que está disponible para su uso en cualquier documento. En otras palabras, con las entradas de Texto automático que ha almacenado, no necesita escribir el mismo contenido una y otra vez. Pero, ¿cómo podemos usar las entradas de Auto Text rápidamente? Kutools for Word, Panel de Autotexto puede guardar, leer e insertar entradas de autotexto fácilmente en el documento.</h5>
            </div>
        </footer>

        <script>
            $(".nav").find("li").click(function() {
                $(".nav li").removeClass('nav_activa')
                $(this).addClass('nav_activa')
            })
        </script>


    </div>

</body>

</html>