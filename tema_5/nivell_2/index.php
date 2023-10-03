<?php
require ('Class_Shape.php');

echo "Introdueixi l'ample: ";
$width = readline();
echo "Intrduieixi l'alçada: ";
$height = readline();


$triangle = new Triangle($width, $height);
echo "Area del triangle: " . $triangle->area() . "\n";  

$rectangle = new Rectangle($width, $height);
echo "Area del rectangle: " . $rectangle->area() . "\n";  