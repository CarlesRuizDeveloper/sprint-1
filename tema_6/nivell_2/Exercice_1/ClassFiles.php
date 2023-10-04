<?php

class File{
    public $property;

    public function __construct()
    {
        
    }

    public function getFile(){
        return __FILE__;
    }

    public function getDir(){
        return __DIR__;
    }

}

?>