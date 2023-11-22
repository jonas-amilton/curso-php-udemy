<?php

$arr = [
    'nome' => 'Jonas',
    'idade' => 27
];

if (array_key_exists('nome', $arr)) {

    echo 'chave existe<br>';
} else {

    echo 'chave não existe<br>';
}

if (array_key_exists('profissao', $arr)) {

    echo 'chave existe<br>';
} else {

    echo 'chave não existe<br>';
}

if (isset($arr['nome'])) {

    echo 'chave existe<br>';
} else {

    echo 'chave não existe<br>';
}

if (isset($arr['profissao'])) {

    echo 'chave existe<br>';
} else {

    echo 'chave não existe<br>';
}

if (isset($x)) {

    echo 'var existe<br>';
} else {

    echo 'var não existe<br>';
}