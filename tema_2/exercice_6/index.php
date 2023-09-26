<?php

function isBitten()
{
    $random = rand(1, 2);
    $bitten = false;
    $msg = "No t'està mossegant"."<br>";

    if ($random == 1) {
        $bitten = true;
        $msg = "T'està mossegant, auch!";
    }
    echo $msg;
    return $bitten;
}

echo isBitten();// El ejercicio pide el TRUE o FAlSE, consideras incorrecto que añada el String?

?>


