<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Un Juego</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet">
    < </head>

<body class="container">

    <div class="container-fluid">
        <div class="formulario">

            <h1>AGREGAR UN JUEGO</h1>
            <form action="guardar_en_bd.php" method="post">
                <p>Nombre del Juego:<br><input type="text" name="NombreJuego"></p>
                <p>Género:<br><select name="Genero">
                        <option>Acción</option>
                        <option>Arcade</option>
                        <option>Deportivo</option>
                        <option>Estrategia</option>
                        <option>Simulación</option>

                    </select></p>
                <p>Tipo de Consola:<br><select name="TipoConsola">
                        <option>Xbox</option>
                        <option>PlayStation</option>
                        <option>PC</option>
                    </select></p>
                <p>Fecha de Lanzamiento:<br><input type="date" name="FechaLanzamiento"></p>
                <p>Desarrollador:<br><input type="text" name="Desarrollador"></p>


                <br>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">
            </form>

        </div>
    </div>

</body>

</html>