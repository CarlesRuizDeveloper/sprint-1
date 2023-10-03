<?php

abstract class Animal{
    protected $name;
    public $color;

    public function __construct($name,$color){
       $this-> name = $name;
       $this-> color = $color;
    }
    abstract function makeSound();

}

class Gat extends Animal{

    public function __construct($name,$color){
        $this-> name = $name;
        $this-> color = $color;
     }

    public function makeSound(){
        echo "miau \n";
    }
}

class Gos extends Animal{
    public function __construct($name,$color){
        $this-> name = $name;
        $this-> color = $color;
     }
    public function makeSound(){
        echo "bup, bup \n";
    }
}
?>