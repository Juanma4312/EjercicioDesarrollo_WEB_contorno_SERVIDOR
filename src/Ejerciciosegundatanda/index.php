<?php
include_once "ejercicio2.php";
include_once "ejercicio6.php";
echo "01<br>";
$dir = new Direccion("Juan Carlos", "pontevedra", 36669);
$persona1= new Profesor("pepe",32,$dir, "Matemático");
echo $persona1->mostrarInformacion();



?>