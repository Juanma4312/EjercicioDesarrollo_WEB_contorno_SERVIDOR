<?php

function area($baseradio, $altura) {
    define("NUMEROPI", 3.1416);

    return  $volume = $baseradio * NUMEROPI * $altura * NUMEROPI;

}

echo area(5, 10);