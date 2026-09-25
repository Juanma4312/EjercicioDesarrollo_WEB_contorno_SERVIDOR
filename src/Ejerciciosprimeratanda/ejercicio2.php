<?php
define("NOMBRE", "admin");
define("CONTRASEÑA", 1234);
function sesion($nombre, $contraseña){
    if (empty($nombre) || empty($contraseña)) {

        echo "El nombre o la contrasña está vacio. ERROR";
    } elseif ($nombre == NOMBRE && $contraseña == CONTRASEÑA) {
        echo "Inicio de sesión correcto, se encentra en admin";
    } else {
        echo "Su sesión no esta resgistrada todavía";
    }
}

/**
 * En html usuario = <?= $tesUser ?> --> Esto lanzaría un echo
 * password = <?= $testPass ?> --> Esto lanzaría otro echo
 * Esto esta pensado para poner solo una cosa, por ejemplo
 * una variable o una funcion etc
 * 
 */

sesion("admin", 1234);
