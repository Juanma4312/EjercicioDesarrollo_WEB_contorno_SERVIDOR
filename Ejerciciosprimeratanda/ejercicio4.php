<?php
define("NUMEROPI", 3.1416);
function area($baseradio, $altura)
{
    return  $volume = $baseradio * NUMEROPI * $altura * $baseradio;
}

echo area(5, 10);
