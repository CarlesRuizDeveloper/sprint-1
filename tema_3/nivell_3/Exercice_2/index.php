<?php


function checkPar($cadena) {
    return strlen($cadena) % 2 == 0;
}

$arrayStrings = ["ordinador", "ratoli", "teclat", "pc", "ram"];

$result = array_filter($arrayStrings, "checkPar");
$resultArray = array_values($result);

print_r($resultArray);

?>


