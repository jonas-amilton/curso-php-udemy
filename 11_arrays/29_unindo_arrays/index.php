<?php


$arr1 = range(1,5);
$arr2 = range(6, 10);
$arr3 = range(11, 15);

$arrMerge = array_merge($arr1, $arr2, $arr3);

print_r($arrMerge);