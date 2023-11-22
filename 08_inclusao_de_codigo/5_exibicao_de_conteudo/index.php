<?php

$nome = 'Jonas';
$sobrenome = 'Silva';

?>

<form action="">
    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type="text" value="<?= $sobrenome; ?>">
    </div>
    <div>
        <input type="button" value="Enviar">
    </div>
</form>