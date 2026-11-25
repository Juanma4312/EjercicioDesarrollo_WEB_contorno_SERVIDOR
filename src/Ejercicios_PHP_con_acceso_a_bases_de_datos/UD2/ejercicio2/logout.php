<?php
//si está autenticado
session_start();
if (isset($_SESSION['nic'])) {

//elimino todas las variables de sesion
session_destroy();
//elimino la cookie de sesion
$cookie_params = session_get_cookie_params();
$cookieName = session_name();
setcookie(session_name(),'',1000,$cookie_params['path'],$cookie_params['domain']);

    //Elimino la sesion
    // unset($_SESSION['nic']);
}

//Redirijo a login.
header("Location:login.php");
exit();
   




