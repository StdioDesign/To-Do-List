<?php 

$a = 10;

//passagem de parametro por referencia por "&" torna o valor da variavel externa o mesmo da função
function trocaValor(&$b){

	$b += 50;

	return $b;

}

echo trocaValor ($a);
echo "<br>";
echo trocaValor ($a);
echo "<br>";
echo $a;
 ?>