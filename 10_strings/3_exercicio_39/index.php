<?php

$arr = [
    'porta' => 100,
    'leite' => 5,
    'cafe' => 9,
    'cafeteira' => 120
];


function maioresQue10($a)
{

    $arrItensCaros = [];


    foreach ($a as $item => $value) {
        if ($value > 10) {
            array_push($arrItensCaros, $item);
        }
    }


    return $arrItensCaros;
}


$novoArr = maioresQue10($arr);


print_r($novoArr);