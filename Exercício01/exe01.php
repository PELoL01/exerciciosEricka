<!--Exercício 1-->

<?php

$n = isset($_GET["Número"])?$_GET["Número"]:0;

if ($n > 0){
	$resultado = "<h1>$n é um Valor Positivo</h1>";
}elseif ($n < 0){
	$resultado = "<h1>$n é um Valor Negativo</h1>";
}else{
	$resultado = "<h1>É Igual a Zero</h1>";
}

echo $resultado;

?>