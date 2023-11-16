<?php


class Humano
{
    public $idade = 29;

    public function falar()
    {
        echo 'Olá mundo<br>';
    }

    private function gritar()
    {
        echo 'ESTOU GRITANDO<br>';
    }

    public function acessarGritar()
    {
        $this->gritar();
    }

    protected function falarBaixo()
    {
        echo 'lalalala<br>';
    }

    public function acessarfalarBaixo()
    {
        $this->falarBaixo();
    }
}

class Programador extends Humano
{
}

$ze = new Humano;

$ze->falar();

$matheus = new Programador;

echo $matheus->idade . '<br>';

$matheus->acessarGritar();

$matheus->acessarfalarBaixo();
