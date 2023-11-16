<?php

class Cachorro
{
    function latir()
    {
        echo 'au au au <br>';
    }
    function andar()
    {
        echo 'andando<br>';
    }
}

$pretinha = new Cachorro;
$pandora = new Cachorro;

$pretinha->latir();
$pretinha->andar();

$pandora->latir();
$pandora->andar();
