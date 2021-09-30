<!--Exercício 9-->

<?php

$nome = isset($_GET["nome"])?$_GET["nome"]:0;
$idade = isset($_GET["idade"])?$_GET["idade"]:0;

if($idade >= 18){
    $dados = "<h1>$nome é maior de idade e tem $idade anos</h1>";
}else{
    $dados = "<h1>$nome é menor de idade e tem $idade anos</h1>";
}

echo $dados;

?>