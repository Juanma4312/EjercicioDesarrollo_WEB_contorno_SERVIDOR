<?php
function reverso(String $numero): String
{
    return strrev($numero);
}
echo reverso("12345");

/**
 * functio reverso2(int $numero): int{
 * $enString = strval($numero);
 * $reverso = strrev($enstring);
 * return intval($reverso);
 * }
 * 
 * echo reverso(789)
 */
