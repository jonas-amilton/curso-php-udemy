<?php


$str = 'este item está em promoção';


// Divida a string em palavras
$word = explode(' ', $str);

// Pegue a última palavra
$lastWord = array_pop($word);

// $lastWordUpper = strtoupper($lastWord);

// echo $lastWordUpper . '<br>';

// Converta a última palavra para maiúsculas
$lastWordMaiuscula = strtoupper($lastWord);

// Adicione a última palavra maiúscula de volta à lista de palavras
$word[] = $lastWordMaiuscula;

// Junte as palavras de volta em uma string
$strFinal = implode(' ', $word);

// Exiba o resultado
echo $strFinal;