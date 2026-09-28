<?php

/**
 * Un array en php es un mapa ordenado con el formato
 * 
 * 
 * --FORMAS DE DEFINIR UN ARRAY--
 * $variable = array();
 * $variable = [];
 * 
 * -->Añadir elementos
 *      $var = array(key => valor, key2 => valor2)
 */
//Declarar array con contenido
$var = array(
   1 => "Primer elemento",
   2 => 2.02,
   "Tres" => false,
);
// $var = [
//    1 => "Primer elemento",
//    2 => 2.02,
//    "Tres" => false,
// ];
// $var = []; //array vacío
var_dump($var);

//Aceder a un elemento de un array

echo "<br>", $var['Tres'];

//Agregar elementos en un array

   //por el final
   array_push($var, "super última inserción con array push");
   $var[] = "push con []";

   //En una posición
   $var["nuevo"] = true;
   $var[90] = "es un numero";
   $var[] = "es otro numero";
   var_dump($var);

//Eliminar un elemento de un array
//-->unset($var); // despues de esto me cargo toda la variable 

unset($var["nuevo"]);

echo "Segundo vardump <br>";

var_dump($var);

//Recorrer 
$var3 = ["pero", "Manzana", "Plátano"];
for($i=0; $i<count($var3); $i++){
   echo "La posicioón $i del array tiene: ", $var3[$i], "<br>";
}

//Con foreach (90% de los casos)
foreach($var as $valor){
   echo  $valor, "<br>";
}

foreach($var as $key => $valor){
   echo  "$key => $valor", "<br>";
}