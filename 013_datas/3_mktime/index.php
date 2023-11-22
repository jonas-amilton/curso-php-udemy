<?php


$dataNascimento = mktime(02, 12, 33, 01, 21, 1996);


$dataFormatada = date('d/m/y', $dataNascimento);

echo $dataFormatada;