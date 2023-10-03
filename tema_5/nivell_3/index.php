<?php
require ('Class_Shape.php');

/*
$triangle = new Triangle();


$triangulo = new Triangle();
echo "El área del triángulo es: " . $triangulo->area();
*/
do {
    $num =1;
    switch (menu()) {
    case 1:
        $triangle = new Triangle();
        echo "L'àrea del triangle és: " . $triangle->area();
        break;
    case 2:
        $rectangle = new Rectangle();
        echo "L'àrea del rectangle és: " . $rectangle->area();
        break;
    case 3:
            $rectangle = new Rectangle();
            echo "L'àrea del rectangle és: " . $rectangle->area();
            break;
    case 0:
        $salir = true;
        break;
    }
} while (!$salir);


function  menu() {
    $opcio =" ";
    $MINIMO = 0;
    $MAXIMO = 3;

    do {
        echo ("\n************ MENú PRINCIPAL ************ \n \n");
        echo ("1. Calcula l'àrea d'un triangle \n");
        echo ("2. Calcula l'àrea d'un rectangle \n");
        echo ("2. Calcula l'àrea d'un cercle \n");
        echo ("0. Salir del programa. \n \n");
        $opcio = intval(readline("Escoja una opción: \n"));
        if ($opcio < $MINIMO || $opcio > $MAXIMO) {
            echo("Opción no válida \n");
        }
    } while ($opcio < $MINIMO || $opcio > $MAXIMO);
    return $opcio;
}