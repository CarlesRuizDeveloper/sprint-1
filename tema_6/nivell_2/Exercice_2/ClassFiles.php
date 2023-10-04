<?php

class File{

    public function getFile(){
        return __FILE__;
    }

    public function getDir(){
        return __DIR__;
    }
    public function __toString() {
        return "This is a File Object";
    }
}

?>