<?php


$a = 10;

$b = 15;

function testeEscopo()
{


    $a = 5;

    global $b;

    static $c = 0;

    $c++;

    $b++;

    $a++;

    echo 'Escopo local de A: ' . $a . '<br>';

    echo 'Escopo global de B: ' . $b . '<br>';

    echo 'Escopo static de C: ' . $c . '<br>';

}

testeEscopo();

echo 'Escopo global de A: ' . $a . '<br>';

echo 'Escopo global de A: ' . $b . '<br>';

testeEscopo();
