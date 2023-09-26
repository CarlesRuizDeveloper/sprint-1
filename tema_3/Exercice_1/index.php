<?php

$nums = array(1,2,3,4,5);
var_dump($nums);

$arraySize = count($nums);

for ($i=0; $i < $arraySize ; $i++) { 
    echo $nums[$i].PHP_EOL."<br>";   
}

?>