<?php

class Cachorro
{
    public $raca;
    public $nome;
    public $idade;


    function __construct($raca, $nome, $idade)
    {
        $this->raca = $raca;
        $this->nome = $nome;
        $this->idade = $idade;
    }
}


$pandora = new Cachorro('caramelo', 'Pandora', 5);


echo "$pandora->nome tem $pandora->idade anos e sua raça é $pandora->raca";
