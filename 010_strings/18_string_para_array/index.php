<?php

$frase = 'Testando o explode';

$fraseArray = explode(' ', $frase);

print_r($fraseArray);
echo '<br>';

$fraseArray2 = explode(',', $frase);

print_r($fraseArray2);
echo '<br>';

$fraseB = 'Carro, Avião, Moto';

$fraseBArray = explode(',', $fraseB);

print_r($fraseB);
echo '<br>';