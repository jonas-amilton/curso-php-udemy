<?php

$pessoa = new class()
{
    public $nome = 'Matheus';

    public function dizerNome()
    {
        echo "olá, meu nome é $this->nome<br>";
    }
};

echo $pessoa->nome;
echo '<br>';

echo $pessoa->dizerNome();
