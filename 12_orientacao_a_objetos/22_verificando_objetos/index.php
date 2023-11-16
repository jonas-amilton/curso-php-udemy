<?php


class Humano
{
    public function falar()
    {
        echo 'Ola<br>';
    }
}

$matheus = new Humano;

if (is_object($matheus)) {
    echo 'é um obj<br>';
} else {
    echo 'não é um obj<br>';
}


$teste = 10;

if (is_object($teste)) {
    echo 'é um obj<br>';
} else {
    echo 'não é um obj<br>';
}

echo get_class($matheus) . '<br>';

if(method_exists($matheus, 'falar')){
    echo 'metodo existe<br>';
} else {
    echo 'metodo não existe<br>';
}


if(method_exists($matheus, 'sss')){
    echo 'metodo existe<br>';
} else {
    echo 'metodo não existe<br>';
}
