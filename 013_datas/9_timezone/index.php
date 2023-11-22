<?php

// recebendo fuso horário como parametro
date_default_timezone_set('America/Sao_Paulo');

// data atual
$data = new DateTime();

print_r($data);
echo "<br>";