<?php

if (isset($_POST['marca'])) {
    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $opcional = $_POST['opcional'];
} else {
    $marca = 'Padrão';
    $preco = 'Padrão';
    $opcional = 'Padrão';
}



?>

<h1>A marca do carro é <?= $marca ?>, e o preço é <?= $preco ?></h1>