<?php

$nome = 'Pandora';
$idade = 4;
$cor = 'caramelo e branco';
$raca = 'caramelo';

$cachorro = compact('nome', 'idade', 'cor', 'raca');

foreach ($cachorro as $key => $value) {
    echo $value . '<br>';
}