<?php

$nome = "Glaucio";

function teste(){

	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "joao";
	echo $nome."agora no teste2";

}

teste();
teste2();

?>