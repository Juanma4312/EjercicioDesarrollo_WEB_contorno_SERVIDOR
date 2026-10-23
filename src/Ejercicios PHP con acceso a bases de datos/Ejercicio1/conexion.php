/**fUNCIONES DE ACCDESO A LA BASE DE DATOS.*/
<?php
define ("DSN", "mysql:host=db;dbname=ejercicio3_1");
define ("BD_USER", "usuario");
define ("BD_PASS", "abc1234");

function getconexion(){
    try {
        $bd = new PDO(DSN, BD_USER,BD_PASS);
    } catch (PDOException $th) {
        error_log("Error accediendo a la base de datos: " . $th->getMessage());
        die();
    }
}

/**
 * obtine un usuario por nic
 * @return un array con el usuario  o false si no existe el usuario
 * 
 */

 function getUserByNic(String $nic):array|false{

    $sql = "SELECT nic, nombre, apellido1, apellido2, email, contraseña FROM usuario "/*Evitar porner asterisco, muy peligroso*/
 }
?>