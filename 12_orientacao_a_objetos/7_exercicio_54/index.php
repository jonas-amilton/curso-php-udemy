<?php

class Pessoa
{
    public $nome;
    public $idade;

    function andar()
    {
        echo 'caminhando<br>';
    }
}

$jonas = new Pessoa;

$jonas->nome = 'Jonas';
$jonas->idade = 27;

echo $jonas->nome;
echo '<br>';

echo $jonas->idade;
echo '<br>';

$jonas->andar();
