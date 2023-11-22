<?php



$arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

echo 'Array completo<br>';
print_r($arr);
echo '<br><br>';

$removidos = array_splice($arr, 2, 2);

echo 'Elementos removidos<br>';
print_r($removidos);
echo '<br><br>';


echo 'Array após remoção<br>';
print_r($arr);