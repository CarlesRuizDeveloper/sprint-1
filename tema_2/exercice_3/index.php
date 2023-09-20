<?php 

$x = 2;
$y = 5;
$n = 1.5;
$m = 2.5;
define("BR", "<br>");

echo "El valor de x es: ".$x.BR."El valor de y es: ".$y.BR;
echo "La suma de x e y es: ".($x+$y).BR;
echo "La resta de x e y es: ".($x-$y).BR;
echo "El producto de x e y es: ".($x*$y).BR;
echo "El módulo de x e y es: ".($x%$y).BR.BR;

echo "El valor de n es: ".$n.BR."El valor de m es: ".$m.BR; 
echo "La suma de n y m es: ".($n+$m).BR;
echo "La resta de n y m es: ".($n-$m).BR;
echo "El producto de n y m es: ".($n*$m).BR;
echo "El módulo de n y m es: ".($n%$m).BR.BR;

echo "El doble de x es: ".($x*2).BR;
echo "El doble de y es: ".($y*2).BR;
echo "El doble de n es: ".($n*2).BR;
echo "El doble de m es: ".($m*2).BR.BR;

echo "La suma de todas las variables es: ".($x+$y+$n+$m).BR;
echo "El producto de todas las variables es: ".($x*$y*$n*$m).BR.BR;

$num1 = 8.01;
$num2 = 4.3;
$operator = "+";

function calculator($num1,$num2,$operator){
    if(is_numeric($num1) && is_numeric($num2)){
        switch ($operator) {
            case "+":
                return $num1+$num2;
                break;
            case "-":
                return $num1-$num2;
                break;
            case "*":
                return $num1*$num2;
                break;
            case "/":
                return $num1/$num2;
                break;
            default:
                echo "Operador no válido.";
        }
    }else{
        echo "Error, no se han introducido números.";
    }
}

echo "Primer números: ".$num1.BR;
echo "Segundo número: ".$num2.BR;
echo "Operador: ".$operator.BR;

$result = calculator($num1,$num2,$operator);
echo "El resultado de la operación es: ".$result;
