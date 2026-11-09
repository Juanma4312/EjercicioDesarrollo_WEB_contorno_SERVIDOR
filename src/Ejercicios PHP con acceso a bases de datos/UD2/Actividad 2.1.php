<?php
/**
 * Enunciado
 * 4. Crea un programa en php que salude al usuario por su nombre. 
 * Si es la primera vez que accede o ha accedido hace 
 * más de 5 minutos el programa debe solicitar el nombre del usuario.
 */
$nombre = "juanma";

 setcookie(
    name:"nombre",
    value: $nombre,
    expires_or_options: time() + 300,
    path: "./Ejercicios PHP con acceso a bases de datos/UD2/Actividad 2.1.php",
    domain: "",
    secure:true,
    httponly: true
 );
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
<form action="" method="get">
    <label for="text">Nombre</label>
    <input type="text" >

    <button type="summit">Mi nombre</button>
</form>
    
</body>
</html>