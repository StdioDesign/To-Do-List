<?php 

function ola($texto = "Mundo", $periodo = "Bom dia"){


	return "Olá $texto! $periodo! <br>";

}

echo ola("Mundo");
echo ola("", "Boa Noite");
echo ola("Glaucio", "Boa Tarde");
echo ola("João", "");

 ?>