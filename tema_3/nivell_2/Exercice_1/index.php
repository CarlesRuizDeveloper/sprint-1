<?php
define("BR","<br>");
$nums1 = [1,9.99,3,4.25,9];
$nums2 = [1,2.63,11,5.5,9.99];
print_r($nums1);
echo BR.PHP_EOL;
print_r($nums2);
echo BR.PHP_EOL;
$intersectArray = array_intersect($nums1,$nums2);
print_r($intersectArray);
echo BR.PHP_EOL;
$mergeArray = array_merge($nums1, $nums2);
print_r($mergeArray);
?>