<!--Exercício 5-->

<?php

$n = isset($_GET["num"])?$_GET["num"]:0;

if($n % 2 == 0){
    $r = "<h1>$n é um número par</h1>";
}else {
    $r = "<h1>$n é um número ímpar</h1>";
}
 echo $r;
?>