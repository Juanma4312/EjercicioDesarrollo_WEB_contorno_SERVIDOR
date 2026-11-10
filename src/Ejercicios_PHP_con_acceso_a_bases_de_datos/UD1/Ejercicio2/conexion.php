<?php


/**
 * Funciones de manipulacion de datos en la BD
 */

 define ("DSN", "mysql:host=db;dbname=desarrollo");
 define ("USER", "usuario");
 define ("PASS", "abc1234");



function getconexion(){
    //1º Tenemso que establecer la conexicón entre php y la BD
    $dsn = "mysql:host=db;dbname=mi_base_de_datos";
    try {
        $conexion =  new PDO($dsn, "root", "root");
    } catch (PDOException $e) {
        echo "Error en la conexion con la BD";
        die();
    }
    return $conexion;
}


function addVideojuego(String $nombre, String $plataforma, int $lanzamiento, ?string $genero) : bool{
$toret = false;
$sql = "INSERT INTO `videojuegos`(`nombre`, `plataforma`, `anio_lanzamiento`, `genero`) VALUES ([value-2]','[value-3]','[value-4]','[value-5]')";
try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}
    return $toret;
}

function updateVideojuego(int $id, String $nombre, String $plataforma, int $lanzamiento, ?string $genero) : bool{
    $toret = false;
        $sql = "INSERT INTO `videojuegos`(`id`, `nombre`, `plataforma`, `anio_lanzamiento`, `genero`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
    if (isset($genero)) {

        # code...
    }

    try {
        //code...
    } catch (\Throwable $th) {
        //throw $th;
    }
        return $toret;
}

function deleteVideojuego(int $id) : bool {
    $toret = false;
try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}
    return $toret;
}

function getVideojuego() : ?array {
    $toret = [];
try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}
    return $toret;
}

function getAllVideojuego() : array {
    $toret = [];
try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}
    return $toret;
}






?>