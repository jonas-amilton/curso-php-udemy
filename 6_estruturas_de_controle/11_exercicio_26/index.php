<?php

$velocidade = 90;

if($velocidade < 40){
    echo 'velocidade segura';
}else if($velocidade === 40){
    echo 'cuidado com a velocidade';
}else{
    echo 'multa';
}

?>