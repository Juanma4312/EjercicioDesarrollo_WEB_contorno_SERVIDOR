<?php

function calcularIva(float $precio, int $iva): float{
    //isset te comprueba si la variable es nula
    if (!isset($iva)){
        $iva = 21;
    }else{
        $iva=($precio * $iva) / 100;
    }

    return $iva;
}

echo "El iva es ", calcularIva(35.32,3);


?>
