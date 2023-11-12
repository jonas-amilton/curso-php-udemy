<?php

$arr = [];

for ($i = 10; $i <= 20; $i++) {

    array_push($arr, $i);
    
}

for ($j = 0; $j <= 10; $j++) {

    if ($arr[$j] % 2 == 1) {

        print_r($arr[$j]);

        echo '<br>';
    }
}
