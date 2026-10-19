<?php
/**
 * Agregamos un cliente a la base de datos mi_base_de_datos 
 * utilizando la libreria mysqli
 */
function addCliente(string $nombre, string $telefono){

    //1º Tenemso que estabalecer la conexión entre php y la BD
    $conexion = new mysqli("db", "usuarioBD", "abc123", "mi_base_de_datos");
    if($conexion->connect_error){
        echo "Error de conexción";
        die();
    }
    $sql= "INSERT INTO clientes( nombre, telefono) VALUES ('$nombre','$telefono')";
    echo "consulta ejecutada: <br><span>$sql</span><br>";

    $conexion->query($sql);
    $conexion->close();

}

// function getClientes():array{
//     $tore[];
// }

if($_SERVER['REQUEST_METHOD']=="POST"){
    addCliente($_POST['nombre'], $_POST['telefono']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar clientes</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono"><br>

        <button type="submit">enivar</button>
    </form>
    
</body>
</html>