<?php

function verificaArray($arr)
{

    $newArr = [];

    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] > 7) {

            array_push($newArr, $arr[$i]);
        }
    }

    return print_r($newArr);
}


verificaArray([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
