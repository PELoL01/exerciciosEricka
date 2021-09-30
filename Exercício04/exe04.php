<!--Exercício 4-->

<?php

$n1 = isset($_GET["num1"])?$_GET["num1"]:0;
$n2 = isset($_GET["num2"])?$_GET["num2"]:0;

$r1 = $n1 + $n2;
$r2 = $n1 - $n2;
$r3 = $n1 * $n2;
$r4 = $n1 / $n2;

$op = isset($_GET["ope"])?$_GET["ope"]:0;
switch ($op) {
    case 1:
        $r = "<h1>A soma entre $n1 + $n2 = $r1</h1>";
        break;
    
    case 2:
        $r = "<h1>A subtração entre $n1 - $n2 = $r2</h1>";
        break;
    
    case 3:
        $r = "<h1>A multiplicação entre $n1 X $n2 = $r3</h1>";
        break;
    
    case 4:
        $r = "<h1>A divisão entre $n1 /$n2 = $r4</h1>";
}

echo $r;

?>