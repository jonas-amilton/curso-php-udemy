<?php

$url = 'https://www.google.com';

$arrUrl = parse_url($url);

print_r($arrUrl);

echo '<br>';

echo $arrUrl['scheme'];

echo '<br>';

echo $arrUrl['host'];