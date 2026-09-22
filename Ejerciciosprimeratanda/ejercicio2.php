<?php

function sesion($nombre, $contraseña)
{
    if (empty($nombre) && empty($contraseña)) {

        echo "El nombre o la contrasña está vacio. ERROR";
    } elseif ($nombre == "admin" && $contraseña == 1234) {
        echo "Inicio de sesión correcto, se encentra en admin";
    }else{
        echo "Su sesión no esta resgistrada todavía";
    }
}


sesion("admin",1234);
