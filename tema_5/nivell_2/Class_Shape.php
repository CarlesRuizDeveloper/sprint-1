<?php

 abstract class Shape{

    public $width;
    public $height;

    public function __construct($whidth, $height) {
        $this->width = $whidth;
        $this->height = $height;
    }
    public abstract function area();

}

class Triangle extends Shape{
    public function area() {
        return 0.5 * $this->width * $this->height;
    }
}

class Rectangle extends Shape{
    public function area() {
        return $this->width * $this->height;
    }
}

?>