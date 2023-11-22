<?php


$str = 'esta é minha string de novo';

$minha = substr($str, 8, 5);

echo $minha . '<br>';


$novaString = substr($str, 8, -7);

echo $novaString;