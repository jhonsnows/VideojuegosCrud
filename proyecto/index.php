<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <script src="../librerias/materialize/jquery-3.4.0.min.js"></script>
    <script src="../librerias/materialize/js/materialize.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="container">

    <div class="container-fluid" aling="center">
        <h1>CRUD: Video Juegos!</h1>
        <div class="formulario">

            <!-- Menú de navegación-->

            <a class="btn btn-primary" href="crear.php">CREAR</a>
            <a class="btn btn-primary" href="leer.php">LEER</a>
            <a class="btn btn-primary" href="leer.php">ACTUALIZAR</a>
            <a class="btn btn-primary" href="leer.php">ELMINAR</a>

            <br>
        </div>
        <div class="formulario">

            <!-- Inicia caja de búsqueda para encontrar juegos escribiendo el ID del juego especifico-->

            <h4>Buscar Videouego por ID</h4>
            <p><i>Id de prueba: 2028</i></p>

            <!-- Se envia por el metodo GET un value id que sera leído y comprobado mas adelante-->

            <form action="" method="GET">

                <input type="text" name="id" value="<?php if (isset($_GET['id'])) {
                                                        echo $_GET['id'];
                                                    } ?>">

                <input class="btn btn-dark" type="submit" value="Buscar">

            </form>

            <hr>

            <?php
            //Conectamos a la base de datos
            $con = mysqli_connect("localhost", "root", "unad2021", "crud");

            //Comprobamos si la variable ID obtenida en el formulario de búsqueda es igual al valor id en la tabla "games" en la base de datos
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                //Se hace la consulta a la base de datos

                $query = "SELECT * FROM games WHERE id='$id' ";
                $query_run = mysqli_query($con, $query);

                // Se muestra la consulta en una tabla

                echo "<table>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nombre</th>";
                echo "<th>Género</th>";
                echo "<th>Tipo de Consola</th>";
                echo "<th>Año de Lanzamiento</th>";
                echo "<th>Desarrollador</th>";
                echo "</tr>";
                echo "</thead>";

                // Este Bucle while recorre cada registro en la base de datos donde la varible "id" coincida. Se muestra cada campo en la tabla.
                while ($col = mysqli_fetch_array($query_run)) {
                    echo "<tbody>";
                    echo "<tr>";
                    //El array obtiene cada columna de la tabla con cada valor que coincida con el id buscado por el usuario.
                    echo "<td>" . $col['id'] . "</td><td>" . $col['name'] . "</td><td>" . $col['genero'] . "</td><td>" . $col['console']  . "</td><td>" . $col['añolanzamiento'] . "</td><td>" . $col['desarrollador'] . "</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }

                echo "</table>";
            }

            // cerrar conexión de base de datos
            mysqli_close($con);

            ?>

        </div>
        <footer class="pie">
            <div class="pie">
                <h4>GRUPO 204027_4</h4>
                <h5>JUAN DAVID NIEVES GAINDO <BR> DIEGO ANDRÉS CASTILLA <BR> <A href="https://github.com/jhonsnows/VideojuegosCrud">Link</A></h5>
            </div>
        </footer>
    </div>

</body>

</html>