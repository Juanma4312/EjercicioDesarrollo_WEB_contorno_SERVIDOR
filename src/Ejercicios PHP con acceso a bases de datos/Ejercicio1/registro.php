<?php

function getConexión(){
    //1º Establecer la conexión entre PHP y la BD
    $dsn= "mysql:host=db;dbname=mi_base_de_datos";
    try {
        $conexion = new PDO($dsn, "usuarioBD", "abc123");
    } catch (PDOException $e) {
        echo "Error en la conexion con la BD";
        die();
    }
    return $conexion;
    
}


/**
 * Agregamos pagina de registro a la base dedatos
 * nombre varchar 60
 * apellido1 varchar 100
 * apellido2 varchar 100
 * nic varchar 30
 * correo varchar 320
 * contraseña tamaño da igual, alamcenarse hash 256
 */

  function registro(String $nombre,String $apellido1,String $apellido2, String $nic, String $correo, String $contraseña){
     $sql = " INSERT INTO registro( nombre, apellido1, apellido2, nic, correo, contraseña)
     VALUES ('$nombre','$apellido1','$apellido2','$nic','$correo','$contraseña')";
     $conexion=getConexión();
     echo "Consulta ejecutada";
     try {
            $filasAfectadas = $conexion->exec($sql);
            echo "Se ha agregado $filasAfectadas a registro <br>";
     } catch (PDOException $e) {
        echo "Algo na fallado en la consulta.<br>";
     }

     $conexion = null;

  }

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    registro($_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'],$_POST['nic'], $_POST['correo'], $_POST['contraseña']);
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuarios</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre" type="text">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="apellido1" type="text">Apellido1</label>
        <input type="text" name="apellido1"><br>
        <label for="apellido2" type="text">Apellido2</label>
        <input type="text" name="apellido2"><br>
        <label for="nic" type="text">Nic</label>
        <input type="text" name="nic"><br>
        <label for="correo" type="text">Correo electrónico</label>
        <input type="email" name="correo"><br>
        <label for="contraseña" type="text">Contraseña</label>
        <input type="password" name="contraseña"><br><br>

        <button type="submit">Registrarse</button>

    </form>

    <a href="../Ejercicio1/index.php"> Para ir a Login</a>
    
</body>
</html>