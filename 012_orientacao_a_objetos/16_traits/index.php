<?php

trait Objeto
{
    public function teste()
    {
        echo 'testando trait objeto<br>';
    }
}

trait Testando
{
    public function traitTeste()
    {
        echo 'este metodo é da trait testando<br>';
    }
}

class Central
{
    use Objeto;
    use Testando;
}


$x = new Central;

$x->teste();

$x->traitTeste();