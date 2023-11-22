<?php

$idade1 = 25;
$idade2 = 17;
$nome1 = 'Mario';
$nome2 = 'Maria';

if (is_int($idade1)) {

    $duplica = $idade1 * 2;

    echo 'idade multiplicado por 2 = ' . $duplica;

    if($duplica > 100){
        echo 'é maior que 100';
    }
}

?>