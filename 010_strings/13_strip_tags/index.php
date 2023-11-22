<?php

$textHtml = "<p>testando paragrafo.<div>uma div.</div><p>outro paragrafo.</p></p>";

echo $textHtml;

$salvarTextoBanco = strip_tags($textHtml);

echo $salvarTextoBanco;