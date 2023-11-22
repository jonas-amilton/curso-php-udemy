<?php

$palavra = 'teste';

echo "$palavra global 1 <br>";

if(true){
    $palavra = 'novo teste';

    echo "$palavra if <br>";
}

echo "$palavra global 2 <br>";

function imprimeTexto(){

    $palavra = 'teste 3';

    echo "$palavra local <br>";
}

imprimeTexto();

function testandoGlobal(){

    global $palavra;

    $palavra = 'alterada';

    echo "$palavra global função <br>";

}

testandoGlobal();

echo "$palavra global 3";

?>