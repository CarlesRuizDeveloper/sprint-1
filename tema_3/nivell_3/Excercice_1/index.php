<?php
function cube($num)
{
    return($num * $num * $num);
}

$numsArray = array(3, 4, 3, 8, 15);
$usingMap = array_map("cube", $numsArray);
print_r($usingMap);
?>