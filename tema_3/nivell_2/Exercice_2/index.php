<?php

$studentGrades = [
    "Pepe" => [5, 7, 9, 1, 8],
    "Marta" => [6, 5, 8, 9, 3],
    "Eduardo" => [9, 8, 7, 9, 6],
    "Júlia" => [8, 10, 8, 10, 8]
];

function calcMedia($grades) {
    $sum = array_sum($grades);
    $divisor = count($grades);
    return $sum / $divisor;
}

foreach ($studentGrades as $name => $grades) {
    $studentMedia = calcMedia($grades);
    
    echo "Nota mitjana de $name: $studentMedia <br><br>";
}
$classMedia = array();
foreach ($studentGrades as $notes) {
    $classMedia[] = calcMedia($notes);
}

$classMedia = calcMedia($classMedia);

echo "La mitjana de la classe es: $classMedia";

?>
