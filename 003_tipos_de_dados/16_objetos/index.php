<?php

class Pessoa
{

    public $nome;

    function falar()
    {
        echo 'ola pessoal';
    }
}

$jonas = new Pessoa();

$jonas->nome = "Jonas";

echo $jonas->nome;

echo '<br>';

$jonas->falar();

?>