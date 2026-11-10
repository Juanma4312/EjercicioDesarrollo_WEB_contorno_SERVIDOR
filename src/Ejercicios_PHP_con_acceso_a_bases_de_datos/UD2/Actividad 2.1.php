<?php
/**
 * Enunciado
 * 4. Crea un programa en php que salude al usuario por su nombre. 
 * Si es la primera vez que accede o ha accedido hace 
 * más de 5 minutos el programa debe solicitar el nombre del usuario.
 */
if (isset($_COOKIE['nombre'])) {
    $nombre = $_COOKIE['nombre'];
}

if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    # creo la cookkie y establezco el $nombre para que me enseñe el saludo
    $nombre = $_POST['nombre'];
    setcookie(
       name:"nombre",
       value: $nombre,
       expires_or_options: time() + 300,
       path: "/Ejercicios_PHP_con_acceso_a_bases_de_datos/UD2/",
       domain: "",
       secure:true,
       httponly: true
    );
}

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
<form action="" method="post">
    
   



    <?php
    if (empty($_COOKIE['nombre'])) {
        echo "<label for='nombre'>Nombre</label><br>";
        echo " <input type='text' name='nombre'>";
        echo " <button type='summit'>Mi nombre</button>";
    }else{
        echo "hola de nuevo $nombre";
    }
    ?>
</form>
    
</body>
</html>