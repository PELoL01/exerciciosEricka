<!--Exercício 3-->

<?php

$n = isset($_GET["Número"])?$_GET["Número"]:0;
$p = 2;

$r = ($n * $p)*1;

echo "<h1>$r</h1>";
?>