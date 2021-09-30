<!--Exercício 8-->

<?php

$n1 = isset($_GET["nt1"])?$_GET["nt1"]:0;
$n2 = isset($_GET["nt2"])?$_GET["nt2"]:0;
$n3 = isset($_GET["nt3"])?$_GET["nt3"]:0;

$notas = array($n1, $n2, $n3);

$media = ($n1 + $n2 + $n3) /3;

if($media >= 7){
    $mg = "<h1>Nota 1 = $n1 | Nota 2 = $n2 | Nota 3 = $n3 | MG = $media [Aprovado]</h1>";
}elseif($media >=4 && $media <=6){
    $mg = "<h1>Nota 1 = $n1 | Nota 2 = $n2 | Nota 3 = $n3 | MG = $media [Recuperão]</h1>";
}else{
    $mg = "<h1>Nota 1 = $n1 | Nota 2 = $n2 | Nota 3 = $n3 | MG = $media [Reprovado]</h1>";
}

echo $mg;

?>