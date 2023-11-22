<?php

$n1 = 12.8;

$palavra = 'teste';

$n2 = 12;

if (is_float($n1)) {
    echo 'é float 1';
}

if (is_float($palavra)) {
    echo 'é float 2';
}

if (is_float($n2)) {
    echo 'é float 3';
}

?>