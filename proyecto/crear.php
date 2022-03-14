<?php
    date_default_timezone_get();
    $fecha_actual=date("Y-m")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Un Juego</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="estilos2.css" rel="stylesheet">
    <
</head>
<body aling="center" >
    <div class="container">
    <div class="container-fluid">
        <div class="input-field">
        <h1>AGREGAR UN JUEGO</h1>
        <form action="control.php" method="post" class="formulario" enctype="mutipart/form_data" >
            
            <div class=" mb-3">
                <input placeholder="Ingrese su nombre" name="name" type="text" />
                <label for="name">Nombre</label>
                
            </div>
            <div class="mb-3">
                
                <input placeholder="Ingrese su descripción" name="descrip" type="text" />
                <label for="descrip">Descripción</label>
            </div>
            <div class="mb-3">
                
                <input placeholder="Ingrese la consola" name="console" type="text" />
                <label for="console">Consola</label>
            </div>
            <div class="mb-3">
            <input placeholder="Ingrese su año de lanzamiento" name="ryear" VALUE="<?php echo $fecha_actual ?>" type="text" />
                <label for="ryear">Lanzamiento</label>
            </div>
            <div class="mb-3">
                <input placeholder="Ingrese los jugadores" name="nplayers" type="text" />
                <label for="nplayers">Número de jugadores</label>
            </div>
                
                <input placeholder="Ingrese una imagen" type="file" class="form-control-file "name="image"  />
                <label for="image">IMÁGEN</label>
                
            <div class="mb-3">
                
            </div>
            <div class="mb-3">
                <button aling=center type="submit" name="btn_crear" class="">ENVIAR</button>
            </div>
          </form>
         </div>
        </div>
    </div>
</body>
</html>