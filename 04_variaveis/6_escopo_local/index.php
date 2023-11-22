<?php

$num = 10;

function imprimeNum(){

    $num = 15;

    echo "$num local 1<br>";
}

function imprimeNum2(){

    $num = 12;

    echo "$num local 2<br>";
}

echo "$num global 1<br>";

$num = 5;

echo "$num global 2<br>";

imprimeNum();

imprimeNum2();

?>