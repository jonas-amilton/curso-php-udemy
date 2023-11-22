<?php

$divisao = 5 / 2;

echo $divisao . '<br>';

if (is_float($divisao)) {
    echo "é float <br>";
}

echo 1 . 1 . '<br>';

if (is_string(1 . 1)) {
    echo 'é string <br>';
}

$nome = 'Jonas';

$sobrenome = 'Silva';

$nomeCompleto = $nome . ' ' . $sobrenome;

echo $nomeCompleto;

?>