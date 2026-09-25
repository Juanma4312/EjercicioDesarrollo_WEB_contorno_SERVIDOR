<?php

function sumatorio(int $a, int $b, int $c, int $d, int $e): int {

    return $a + $b + $c + $d + $e;

}

echo sumatorio(5,4,4,4,4);

/**
 * Seria correcto hacerlo con un procedimiento (no debe llevar return)
 * function sumatorio(int $a, int $b, int $c, int $d, int $e): int {
 *
 *   echo "sumatorio de ($a,$b,$c,$d,$e) = ", $a + $b + $c + $d + $e;
 *
 *}
 * 
 * sumatorio(1,2,3,4,5);
 *
 */