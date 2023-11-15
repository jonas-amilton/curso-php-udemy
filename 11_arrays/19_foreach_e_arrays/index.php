<?php


$jonas = [
    'nome' => 'Jonas',
    'idade' => 27,
    'profissao' => 'dev'
];


foreach ($jonas as $carac => $value) {
    echo $carac . ': ' . $value . '<br>';
}