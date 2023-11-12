<?php

function listaSupermercado($itens)
{

    return implode(',', $itens);
}

$listaCompras = ['arroz', 'feijão', 'carne', 'ovos'];


echo listaSupermercado($listaCompras);