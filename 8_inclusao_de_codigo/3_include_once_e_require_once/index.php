<?php

// arquivos que não existem
// include_once 'teste.php';

//arquivos que existem
//com esse include_once só será renderizado uma vez
include_once 'teste2.php';
include_once 'teste2.php';

// arquivos que não existem
require_once 'teste3.php';
require_once 'teste3.php';


?>

<p>testando codigo</p>