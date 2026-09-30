<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="base">Base</label> <br>
        <input type="text" name ="base"><br>

        <label for="exponente">Exponente</label> <br>
        <input type="text" name ="exponente"><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    require_once "funciones.php";
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $base = $_POST['base'];
            $exp = $_POST['exponente'];
            echo "$base^$exp = ", potencia($base,$exp);

        }
    ?>
</body>
</html>