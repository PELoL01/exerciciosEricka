<!--Exercício 7-->

<?php

$n1 = isset($_GET["num1"])?$_GET["num1"]:0;
$n2 = isset($_GET["num2"])?$_GET["num2"]:0;

if($n1 > $n2){
    $r = "<h1>$n1 é maior que $n2</h1>";
}else{
    $r = "<h1>$n1 é menor que $n2</h1>";
}

echo $r;

?>