<?php


$arr = [
    'Jonas' => 10,
    'Maria' => 8,
    'Rita' => 9
];


arsort($arr);

print_r($arr);

echo '<br>';

foreach ($arr as $nome => $nota) {

    echo "<ul><li>Nome: $nome - Nota: $nota</li></ul>";
}
