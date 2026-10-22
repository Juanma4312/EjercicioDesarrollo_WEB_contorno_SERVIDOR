<?php
function getconexion(){
    //1º Tenemso que establecer la conexicón entre php y la BD
    $dsn = "mysql:host=db;dbname=mi_base_de_datos";
    try {
        $conexion =  new PDO($dsn, "usuarioBD", "abc123");
    } catch (PDOException $e) {
        echo "Error en la conexion con la BD";
        die();
    }
    return $conexion;
}

function getDatos():array{

$toret = [];
$conexion=getconexion();


$sql="SELECT * FROM videojuegos";
$resultado = $conexion->query($sql);



return $toret;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
</head>
<body>
    <h1>Videojuegos registrados</h1>
    <table>

    <?php
        //obtengo los datos actuales de la BD
        $juegos = getDatos();
        if (count($juegos)>0) {
            foreach($juegos as $juego){
                echo "<tr>.<th>$juego["nombre"].</th>\n
                    <th>$juego["plataforma"].</th>"
            }
        }
    ?>
        <tr>
            <th>Nombre</th>
            <th>Plataforma</th>
            <th>Año</th>
            <th>Género</th>
            <th>Acciones</th>
        </tr>
        <!-- Datos de ejemplo. Tiene que ser dinámico -->
        <tr>
            <td>God of War</td>
            <td>PlayStation 4</td>
            <td>2018</td>
            <td>Acción</td>
            <td><a href="altamodificacion.php?id=2">Editar</a></td>
            <td><a href="eliminar.php?id=2">Eliminar</a></td>
        </tr>
        <tr>
            <td>Minecraft</td>
            <td>PC</td>
            <td>2011</td>
            <td>Sandbox</td>
            <td><a href="altamodificacion.php?id=3">Editar</a></td>
            <td><a href="eliminar.php?id=3">Eliminar</a></td>
        </tr>
        <tr>
            <td>Fortnite</td>
            <td>PC</td>
            <td>2017</td>
            <td>Battle Royale</td>
            <td><a href="altamodificacion.php?id=3">Editar</a></td>
            <td><a href="eliminar.php?id=3">Eliminar</a></td>
        </tr>
    </table>

</body>
</html>
