<?php

$str = "O rato roeu a roupa do rei de Roma";

$tamanhoDaString = strlen($str);

$qtdA = 0;

for ($i = 0; $i < $tamanhoDaString; $i++) {


    if ($str[$i] == "a") {


        $qtdA++;
    }
}

echo $qtdA;
