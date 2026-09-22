<?php

function calcularIva(float $precio, int $iva): float{
    //isset te comprueba si la variable es nula
    //Esto estaría correcto 
    if (!isset($iva)){
        $iva = 21;
    }else{
        $iva=$precio * $iva / 100;
    }

    return $iva;
}

/** */
/**pero la forma más correcta de hacerlo sería así
*function calcularIva(float $precio, int $iva=21): float{
*   
*         $iva=$precio * $iva / 100;
*
*     return $iva;
*     }
*yo podría llamarla asi ahora echo calcularIva(2) y si le pongo precio 
* en el parametro igual a 1 podría llamarla calcularIva().
* pero tambien si solo quiero pasarle por parametro tiene que ser
* calcularIva(iva: 30)
*/



echo "El iva es ", calcularIva(35.32,3);


?>
