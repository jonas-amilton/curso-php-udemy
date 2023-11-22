<?php

// resgatar elementos de array
// remover elementos

$arr = [1, 2, 3, 4, 5, 6];

echo 'Array completo<br>';
print_r($arr);
echo '<br>';

$removidos = array_splice($arr, 1, 2);

echo 'Elementos removidos<br>';
print_r($removidos);
echo '<br>';


echo 'Array após remoção<br>';
print_r($arr);
echo '<br><br>';

$arr2 = [1, 2, 3, 4, 5, 6];

echo 'Array 2 completo<br>';
print_r($arr2);
echo '<br>';

$removidos2 = array_splice($arr2, 3);

echo 'Elementos removidos<br>';
print_r($removidos2);
echo '<br>';


echo 'Array após remoção<br>';
print_r($arr2);
echo '<br><br>';

$arr3 = [1, 2, 3, 4, 5, 6];

echo 'Array 3 completo<br>';
print_r($arr3);
echo '<br>';

$removidos3 = array_splice($arr3, 3);

echo 'Elementos removidos<br>';
print_r($removidos3);
echo '<br>';


echo 'Array após remoção<br>';
print_r($arr3);
echo '<br>';