<?php

use PHPUnit\Framework\TestCase;

class CreateTest extends TestCase


//Este test comprueba los datos insertados en la BD. Y los compara con los datos reales que se escribieron manualmente.

//La prueba esta por completarse. Hay que seguir trabajando para obtener las aserciones en la parte final del codigo. 

{

/** @test */
    public function probar_datos_ingresados_del_videojuego()
    {

        $servername = "localhost";
        $database = "crud";
        $username = "root";
        $password = "unad2021";

// Creamos la conexión
        $conexion = mysqli_connect($servername, $username, $password, $database);

// Comprobamos la conexión a la BD
        if (!$conexion) {
            die("La conexión ha fallado: " . mysqli_connect_error());
        }
        echo "Conexión satisfactoria a la BD";

// Escribiendo valores de prueba manualmente
        $id = "2100";
        $genero = "Estrategia";
        $nombrejuego = "Warzone";
        $fechalanzamiento = "2022-01-11";
        $tipoconsola = "Xbox";
        $desarrollador = "Activisión";

//Insertar valores de prueba en BD
        $insertar_sql = "INSERT INTO games (id,name,genero,console,añolanzamiento,desarrollador) VALUES ('$id','$nombrejuego','$genero','$tipoconsola','$fechalanzamiento','$desarrollador')";
        mysqli_query($conexion, $insertar_sql);

//Obtener valores de prueba de la BD para comprobarlos en el test
        $mostrar_sql = "SELECT * FROM games WHERE 'id' = $id";
        $result = mysqli_query($conexion, $mostrar_sql);

//Los valores de prueba obtenidos de la BD se ponen en un array "data" y mediante un bucle se recorre cada fila de la tabla para obtener los valores por ID
        $data = array();
        while ($fila = mysqli_fetch_array($result)) {
            $data[] = array(
                'id' => $fila["id"],
                'name' => $fila["name"],
                'genero' => $fila["genero"],
                'console' => $fila["console"],
                'añolanzamiento' => $fila["añolanzamiento"],
                'desarrollador' => $fila["desarrollador"],      
            );
        }

//Sacamos las variables dentro del array para poder utilizarlas en la prueba
        foreach ($data as $item) {

            $id_1 = "{$item['id']}";
            $name_1 = "{$item['name']}";
            $genero_1 = "{$item['genero']}";
            $console_1 = "{$item['console']}";
            $añolanzamiento_1 = "{$item['añolanzamiento']}";
            $desarrollador_1 = "{$item['desarrollador']}";
            
            //Probando que la variable ID actual es la misma esperada guardada en la BD
            //Utilizamos assertEquals de phpunit para verificar que ambos valores son iguales

            self::assertEquals($id, $id_1);
            self::assertEquals($nombrejuego, $name_1);
            self::assertEquals($genero, $genero_1);
            self::assertEquals($tipoconsola, $console_1);
            self::assertEquals($fechalanzamiento, $añolanzamiento_1);
            self::assertEquals($desarrollador, $desarrollador_1);
        }

    }

}
