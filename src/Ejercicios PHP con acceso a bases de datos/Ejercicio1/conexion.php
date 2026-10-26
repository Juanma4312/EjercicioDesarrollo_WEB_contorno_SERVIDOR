/**fUNCIONES DE ACCDESO A LA BASE DE DATOS.*/
<?php
define ("DSN", "mysql:host=db;dbname=ejercicio3_1");
define ("BD_USER", "usuario");
define ("BD_PASS", "abc1234");

function getConexion(){
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
    $usuario= false;
    $sql = "SELECT nic, nombre, apellido1, apellido2, email, contraseña FROM usuarios WHERE nic = $nic "/*Evitar porner asterisco, muy peligroso*/;
    //todo
    $db = getConexion();
    
    try {
        $statement = $db->query($sql);
        $usuario = $statement->fetch();
    } catch (PDOException $th) {
        error_log("Error en la consulta $sql :" . $th->getMessage());
    }finally{
        $statement = null;
        $db=null;
    }
 }

 function addUser(
    string $nic, 
    string $correo, 
    string $contraseña,
    string $nombre, 
    string $apellido1, 
    ?string $apellido2 = null
 ): bool {
$agregado =false;
$sql = " INSERT INTO registro( nombre, apellido1, apellido2, nic, correo, contraseña)
     VALUES ('$nombre','$apellido1','$apellido2','$nic','$correo','$contraseña')";

try {
    $db = getConexion();
    $agregado = $db->exec($sql);
} catch (PDOException $th) {
    error_log("Error al insertar al usuario $sql :" . $th->getMessage());
}finally{
    $db=null;
}

 }
?>