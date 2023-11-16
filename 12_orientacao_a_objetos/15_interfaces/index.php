<?php

interface Caracteristicas
{

    const NOME = 'Matheus';

    public function falar();
}

class Humano implements Caracteristicas
{
    public $idade = 29;

    public function falar()
    {
        echo 'Olá mundo <br>';
    }

    public function dizerNome(){
        echo "Meu nome é " . self::NOME;
    }
}

$matheus = new Humano;
$matheus->falar();
$matheus->dizerNome();