<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Un Juego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet">
</head>

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

                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">

            </form>
        </div>
    </div>

</body>

</html>