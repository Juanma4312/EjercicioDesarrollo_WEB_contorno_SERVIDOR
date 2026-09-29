<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>

    <form action="/Ejerciciosprimeratanda/ejercicio6.php" method="POST">
        <input type="text" name="usuario"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php

    if (isset($_POST['usuario']) && is_numeric($_POST['usuario'])) {
        if (($_POST['usuario']) < 0) {
            echo "El numero es menor que cero";
        } elseif (($_POST['usuario']) == 0) {
            echo "El numero es igual a cero";
        } else {
            echo "El numero es mayor que cero";
        }
    }


    ?>

</body>

</html>