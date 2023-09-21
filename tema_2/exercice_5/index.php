<?php

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

echo nkowDivision(60);
?>