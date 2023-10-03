<?php

abstract class Shape
{
    public function __construct(){}

    public abstract function area();
}

class Triangle extends Shape
{
    private $width;
    private $height;

    public function area()
    {
        echo "Introduce el ancho: ";
        $this->width = readline();
        echo "Introduce la altura: ";
        $this->height = readline();
        $area = 0.5 * $this->width * $this->height;
        return $area;
    }
}


class Rectangle extends Shape
{
    private $width;
    private $height;

    public function area()
    {
        echo "Introdueixi l'ample: ";
        $this-> width = readline();
        echo "Intrduieixi l'alçada: ";
        $this-> width= readline();
        $area = $this->width * $this->height;
        return $area ;
    }
}

class Circle extends Shape
{
    private $radius;
    public function area()
    {
        echo "Introdueixi el radi: ";
        $this->radius = readline();  
        $area =($this->radius*$this->radius) * pi();
        return $area;
    }
}
