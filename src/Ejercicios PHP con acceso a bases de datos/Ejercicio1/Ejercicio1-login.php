<?php
function getConexión()
{
    //1º Establecer la conexión entre PHP y la BD
    $dsn = "mysql:host=db;dbname=mi_base_de_datos";
    try {
        $conexion = new PDO($dsn, "usuarioBD", "abc123");
    } catch (PDOException $e) {
        echo "Error en la conexion con la BD";
        die();
    }
    return $conexion;
}

function getDatos(): array
{

    $toret = [];
    $conexion = getConexión();

    $sql = "SELECT * FROM registro";

    $resultado = $conexion->query($sql);

    $toret = $resultado->fetchAll();

    $conexion = null;

    return $toret;
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // getDatos($_POST['nombre'], $_POST['contraseña']);

    $nombreForm = $_POST['nombre'] ?? '';
    $passForm = $_POST['contraseña'] ?? '';
    $accesoConcedido = false;

    $registros = getDatos();

    foreach ($registros as $registro) {
        if ($nombreForm === $registro["nombre"] && $passForm === $registro["contraseña"]) {
            $accesoConcedido = true;
            break;
        }
    }
    if ($accesoConcedido) {
        $mensajeLogin = "<p>¡Accede! Bienvenido, " . htmlspecialchars($nombreForm) . "</p>";
    } else {
        $mensajeLogin = "<p>No accede. Usuario o contraseña incorrectos.</p>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="contraseña">contraseña</label>
        <input type="password" name="contraseña"><br>

        <button type="submit">Login</button>
    </form>

    <a href="./Ejecicio1/Ejercicio1-registro.php">
        <button type="submit"> Para ir a registro</button>
    </a>

    <?php 
    if (!empty($mensajeLogin)) {
        echo $mensajeLogin;
    }

    //  $registros = getDatos();
    //  $nombre  = "";
    //  $contraseña = "" ;

    //  if(count($registros)>0){

    // //     echo "<h1>registros actuales</h1><ul>";
    //      foreach($registros as $registro){
    // //         echo "<li>".$registro["nombre"]."- ".$registro["apellido1"]."- ".$registro["apellido2"]."- ".$registro["nic"]."- ".$registro["correo"]."- ".$registro["contraseña"];
    // //     }
    // //     echo "</ul>";
    // if ($nombre === $registro["nombre"] && $contraseña === $registro["contraseña"]) {
    //     echo "accede";
    // } else {
    //     echo "no accede";
    // }

    //  }
    // }
    ?>

</body>

</html>