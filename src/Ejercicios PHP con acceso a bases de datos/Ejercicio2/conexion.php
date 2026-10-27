<?php
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
?>