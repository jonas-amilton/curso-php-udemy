<?php


$nome = 'jonas';
$idade = 27;
$sexo = 'm';

$pessoa = compact('nome', 'idade', 'sexo');

print_r($pessoa);
