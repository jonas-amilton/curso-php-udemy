<?php

class Humano
{
    public $idade;
    public $nome;
    public $profissao;

    public function falar()
    {
        echo 'Olá<br>';
    }
}


if (class_exists('Humano')) {
    echo 'classe existe<br>';
}

if (class_exists('Cao')) {
    echo 'classe existe<br>';
} else {
    echo 'classe não existe<br>';
}

print_r(get_class_vars('Humano'));
echo '<br>';

print_r(get_class_methods('Humano'));
echo '<br>';
