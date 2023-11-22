<?php

class Pessoa
{

    function falar()
    {
        echo 'Olá, eu sou um objeto<br>';
    }

    function somar($a, $b)
    {
        echo $a + $b . '<br>';
    }
}

$jonas = new Pessoa;

$jonas->falar();
$jonas->somar(1, 2);
