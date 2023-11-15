<?php

$arr = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

echo 'Array multimensional <br>';

print_r($arr);

echo '<br><br>';

echo 'Arrays dentro do Array multimensional <br>';

for ($i = 0; $i < count($arr); $i++) {

    print_r($arr[$i]);
    echo '<br>';

    for ($l = 0; $l < count($arr[$i]); $l++) {
        echo ($arr[$i][$l]);
        echo '<br>';
    }
}
