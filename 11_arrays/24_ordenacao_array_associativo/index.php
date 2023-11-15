<?php

$arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];

//crescente
asort($arr);

print_r($arr);
echo '<br>';

$arr2 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
];

//decrescente
arsort($arr2);

print_r($arr2);
echo '<br>';

$arr3 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
];

// ordem alfabetica crescente das chaves
ksort($arr3);

print_r($arr3);
echo '<br>';

$arr4 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
];

// ordem alfabetica decrescente das chaves
krsort($arr4);

print_r($arr4);
echo '<br>';