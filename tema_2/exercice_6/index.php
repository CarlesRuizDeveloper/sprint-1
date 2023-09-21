<?php

function isBitten()
{
    $random = rand(1, 2);
    $bitten = false;
    $msg = "No t'està mossegant";

    if ($random == 1) {
        $bitten = true;
        $msg = "T'està mossegant, auch!";
    }
    return $msg;
}
echo isBitten();
?>