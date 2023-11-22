<?php

class Car
{
    public $rodas = 4;
    private $vidro = 'sem pelicula';
    protected $portas = 4;

    public function getVidro()
    {
        return $this->vidro;
    }

    public function getPortas()
    {
        return $this->portas;
    }

    public function setVidro($pelicula)
    {
        $this->vidro = $pelicula;
    }
}

class Mecanico
{
    function modificarRodas($obj)
    {
        $obj->rodas = 10;
    }

    function colocarPelicula($carro, $pelicula)
    {
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;
$mecanicoJorge = new Mecanico;

echo $carro->rodas . '<br>';

$mecanicoJorge->modificarRodas($carro);

echo $carro->rodas . '<br>';

// não pode alterar por que é privado
// $mecanicoJorge->colocarPelicula($carro, 'escura G20');
// echo $carro->vidro . '<br>';


echo $carro->getVidro() . '<br>';

$carro->setVidro('G10');

echo $carro->getVidro() . '<br>';

echo $carro->getPortas() . '<br>';
