<?php

function verificaParOuImpar($n)
{

    if ($n % 2 == 0) {
        return 'É par <br>';
    }

    return 'É impar <br>';
}


echo verificaParOuImpar(1);
echo verificaParOuImpar(2);
