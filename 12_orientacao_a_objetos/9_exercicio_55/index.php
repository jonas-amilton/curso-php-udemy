<?php

class Carro
{
    public $velocidadeMaxima;
    public $nome;

    function setVelocidadeMaxima($vel)
    {
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima()
    {
        return $this->velocidadeMaxima;
    }
}


$ferrari = new Carro;

$ferrari->setVelocidadeMaxima(200);

$ferrari->nome = 'Ferrari';
echo $ferrari->nome . '<br>';

echo $ferrari->getVelocidadeMaxima();
