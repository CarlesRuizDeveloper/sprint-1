<?php 
define("BR", "<br>");
echo BR;
$hi = "Hello, World! ";
echo $hi, BR; 
$hiUpperCase = strtoupper($hi);
echo $hiUpperCase,BR;
$size =strlen($hi);
echo "El tamany de la cadena és de : ".$size." caracters", BR;
echo strrev($hi), BR;
$course = "Aquest és el curs de PHP";
echo $hiUpperCase.$course;

?>