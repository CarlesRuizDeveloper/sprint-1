<?php
/*
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.
*/

//$note = 80;
$level;

function nkowDivision($note){
if($note < 33){
    $level = "Està reprovat";
}elseif($note >= 33 && $note <=44){
    $level ="Tercera Divisió.";
}elseif($note >= 45 && $note <=59){
    $level = "Segona Divisió.";
}elseif($note >= 60){
    $level = "Primera Divisió.";
}
return $level;
}

echo nkowDivision(50);

?>