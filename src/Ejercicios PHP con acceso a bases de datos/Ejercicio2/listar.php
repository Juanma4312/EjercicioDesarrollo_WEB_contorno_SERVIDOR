<?php
require_once 'conexion.php';

function getDatos(): array
{

    $toret = [];
    $conexion = getconexion();


    $sql = "SELECT * FROM videojuegos";
    $resultado = $conexion->query($sql);

    $toret = $resultado->fetchAll();

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
        <tr>
            <th>Nombre</td>
            <th>Plataforma</th>
            <th>Año</th>
            <th>Género</th>
            <th>Acciones</th>
        </tr>

        <?php
        //obtengo los datos actuales de la BD
        $juegos = getDatos();
        if (count($juegos) > 0) {
            foreach ($juegos as $juego) {
                echo "<tr><td>" . $juego['nombre'] . "</td>
                    <td>" . $juego['plataforma'] . "</td>
                    <td>" . $juego['anio_lanzamiento'] . "</td>
                    <td>" . $juego['genero'] . "</td>
                    <td><a href='altamodificacion.php?id=" . $juego['id'] . "'>Editar</a></td>
                    <td><a href='eliminar.php?id=" . $juego['id'] . "'>Eliminar</a></td>
                    </tr>";
            }
        }
        ?>



    </table>

</body>

</html>