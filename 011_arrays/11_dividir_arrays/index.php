<?php

$arr = range(1, 20);

//divide o array em arrays de 4 elementos
print_r(array_chunk($arr, 4));

echo '<br>';

//divide o array em arrays de 10 elementos
$arrays = array_chunk($arr, 10);

print_r($arrays);