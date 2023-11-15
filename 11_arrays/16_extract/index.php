<?php

$cor = 'verde';

echo $cor . '<br>';

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângular',
    'material' => 'aço'
];

extract($arr);

echo $cor . '<br>';
echo $forma . '<br>';
echo $material . '<br>';
