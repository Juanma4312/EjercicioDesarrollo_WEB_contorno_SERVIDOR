<?php
require_once 'conexion.php';

//comprobamos si nos llega correctamente el id 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    echo "El id a eliminar es: " .$id;
    try {        
        $conexion=getconexión();

        $sql = "DELETE from videojuegos where id = $id";

        $conexion->exec($sql);

        echo " Registro eliminado";
    } catch (PDOException $e) {
        echo "Error  al eliminar: " .$e->getMessage();
    }
}else{
    echo "No se ha recibido ningún ID.";
}
$conexion = null;



?>

