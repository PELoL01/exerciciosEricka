<?php

$n = isset($_GET["Número"])?$_GET["Número"]:0;

$m = 0;

echo "<h1>A tabuade de $n é</h1>";

while ($m <= 10){
    $r = $n * $m;
    echo "<h2>$n X $m = $r</h2>";
    $m++;
}

?>