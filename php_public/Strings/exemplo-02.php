<?php

$nome = "darlan nascimento";
//Tudo Maiusculo
$nome = strtoupper($nome);

echo $nome;
//Tudo Minusculo
$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";
//Primeira letra Maiuscula
echo ucfirst($nome);

echo "<br>";
//Primeira letra Maiuscula de cada palavra
echo ucwords($nome);


?>