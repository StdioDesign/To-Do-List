<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";
//acha a posição da palavra procurada
$q = strpos($frase, $palavra);
//pega tudo que tem antes da palavra
$texto = substr($frase, 0,$q);

var_dump($texto);
//pega tudo que vem depois da palavra
$texto2 = substr($frase, $q + strlen($palavra),strlen($frase));

echo "<br>";

var_dump($texto2);
//php.net/ - manual
?>