<?php

class Animal
{
    public $nome;

    function escolherNome($nome)
    {
        $this->nome = $nome;
    }
}

$murphy = new Animal;

$murphy->escolherNome('Murphy');

echo "O nome do animal é $murphy->nome<br>";
