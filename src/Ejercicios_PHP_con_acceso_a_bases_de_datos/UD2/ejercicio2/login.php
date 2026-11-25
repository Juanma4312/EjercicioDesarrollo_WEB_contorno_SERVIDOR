<?php
require_once("funciones.php");
session_start();
$_SESSION['logeado'] = false;

//Con esto compruebo si está logeado ya, y si esta cambio la variable de session a true
if (isset($_POST['nic']) && isset($_POST['pass'])  ) {
    $nic = $_POST['nic'];
    if(comprobar_usuario($_POST['nic'],$_POST['pass'])){
        $_SESSION['logeado'] = true;
        $_SESSION['nic'] = $_POST['nic'];

        if ($_POST['recuerdame']) {
            setcookie("remember_nic",$_POST['nic'], time()+2592000);
        }   
    }
}
//Si es logead lo mando a restringido
if ($_SESSION['logeado'] == true) {
    header("Location: restringido.php");

}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <fieldset>
        <form action="" method="post">
            <label for="nic">Nombre de usuario (nic)</label><br>
            <input type="text" name="nic" value=""><br>
            <label for="pass">Contraseña</label><br>
            <input type="password" name="pass"><br>
            <label for="recuerdame">Recuerdame</label>
            <input type="checkbox" name="recuerdame" id=""><br>
            <button type="submit">Acceder</button>
        </form>
    </fieldset>
    <a href="registro.php">Registrar usuario</a>
    
</body>
</html>