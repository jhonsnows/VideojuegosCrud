<<<<<<< HEAD
<?php
    date_default_timezone_get();
    $fecha_actual=date("Y-m")
?>

=======
>>>>>>> a99ec893d6a99d91dfd19f0aafd667e316ff7115
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Un Juego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="estilos2.css" rel="stylesheet">
<<<<<<< HEAD
    <
=======
>>>>>>> a99ec893d6a99d91dfd19f0aafd667e316ff7115
</head>
<body aling="center" >
    <div class="container">
    <div class="container-fluid">
        <div class="input-field">
        <h1>AGREGAR UN JUEGO</h1>
        <form action="control.php" method="_POST" class="formulario" >
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
<<<<<<< HEAD
            <input placeholder="Ingrese su año de lanzamiento" name="ryear" VALUE="<?php echo $fecha_actual ?>" type="text" />
=======
            <input placeholder="Ingrese su año de lanzamiento" name="ryear" type="text" />
>>>>>>> a99ec893d6a99d91dfd19f0aafd667e316ff7115
                <label for="ryear">Lanzamiento</label>
            </div>
            <div class="mb-3">
                <input placeholder="Ingrese los jugadores" name="nplayers" type="text" />
                <label for="nplayers">Número de jugadores</label>
            </div>
            <div class="mb-3">
                <input placeholder="Ingrese una imagen" name="image" type="text" />
                <label for="image">IMÁGEN</label>
            </div>
            <div class="mb-3">
<<<<<<< HEAD
                <button aling=center type="submit" name="btn_crear" class="">CALCULAR</button>
            </div>
          </form>
         </div>
        </div>
=======
                <button aling=center type="submit" formaction="https://www.youtube.com/watch?v=8F2s8ivKXNY" class="FIXED-BOTTON">CALCULAR</button>
            </div>
          </form>
                    </div>
    </div>
>>>>>>> a99ec893d6a99d91dfd19f0aafd667e316ff7115
    </div>
</body>
</html>