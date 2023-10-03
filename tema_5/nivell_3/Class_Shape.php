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
        echo "Introdueix l'ample: ";
        $this->width = readline();
        echo "Introduce l'alçada': ";
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
        echo "Introdueix l'ample: ";
        $this->width = readline();
        echo "Introduce l'alçada': ";
        $this->height = readline();
        $area = $this->width * $this->height;
        return $area ;
    }
}

class Circle extends Shape
{
    private $radius;
    public function area()
    {
        echo "Introdueix el radi: ";
        $this->radius = readline();  
        $area =($this->radius*$this->radius) * pi();
        return $area;
    }
}
