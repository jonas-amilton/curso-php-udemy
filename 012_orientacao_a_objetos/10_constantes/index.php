<?php

class Humano
{

    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarBracos()
    {
        return self::BRACOS;
    }

    function mostrarOlhos()
    {
        return self::OLHOS;
    }
    
    function mostrarPernas()
    {
        return self::PERNAS;
    }
}


$pessoa = new Humano;

echo $pessoa->mostrarBracos() . '<br>';
echo $pessoa->mostrarOlhos() . '<br>';
echo $pessoa->mostrarPernas() . '<br>';
