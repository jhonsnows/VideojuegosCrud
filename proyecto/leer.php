<?php

    $servername = "localhost";
    $database = "crud";
    $username = "root";
    $password = "unad2021";

    // Creamos la conexión
    $conexion = mysqli_connect($servername, $username, $password, $database);

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Juegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet">

    
</head>

<body class="container">

    <div class="container-fluid">
        <div class="formulario">
            
            <!-- Inicia Tabla Mostrar Datos Juegos-->
            <h1>Listar Juegos</h1>
            <section>

                <br>
                <table id="tabla">
                    <thead style="text-align: center">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Género</th>
                            <th>Tipo de Consola</th>
                            <th>Año de Lanzamiento</th>
                            <th>Desarrollador</th>
                            <th colspan="2">Acción</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM games";
                        $result = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($result)) {
                        ?>

                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['name'] ?></td>
                                <td><?php echo $mostrar['genero'] ?></td>
                                <td><?php echo $mostrar['console'] ?></td>
                                <td><?php echo $mostrar['añolanzamiento'] ?></td>
                                <td><?php echo $mostrar['desarrollador'] ?></td>
                                
                                <td>
                                    <!----eliminar----->
                                    <form action="delete.php" method="post">
                                        <input type="hidden" value="<?php echo $mostrar['id'] ?>" name="id" readonly>
                                        <input type="submit" value="Eliminar" name="btnEliminar">

                                    </form>
                                </td>
                                <td>

                                    <!----editar----->
                                    <form action="update.php?id=<?php echo $mostrar['id']; ?>">
                                        <input type="hidden" value="<?php echo $mostrar['id'] ?>" name="id" readonly>
                                        <input type="submit" value="Editar">
                                    </form>

                                </td>


                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </section>
            <!-- Fin Formulario-->

        </div>
    </div>

</body>

</html>