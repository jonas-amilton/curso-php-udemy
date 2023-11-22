<?php


$arr = ['jonas', 'maria', 'rita', 'janaina'];

$resultado = implode(",", $arr);
$resultadoComQuebraDeLinha = implode("<br>", $arr);

echo 'resultado com "," <br>';
echo $resultado . '<br>';

echo 'resultado com a tag "br" <br>';
echo $resultadoComQuebraDeLinha . '<br>';