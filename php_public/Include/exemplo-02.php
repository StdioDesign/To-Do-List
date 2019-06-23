<?php
//tenta funcionar mesmo que o arquivo não exista
//include "inc/exemplo-01.php";
//requer que o arquivo exista se não ocorre um erro fatal
//require_once chama a função apenas uma vez ignorando as proximas
require "inc/exemplo-01.php";

$resultado = somar(12,25);

echo $resultado;

?>