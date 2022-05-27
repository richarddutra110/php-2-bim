<?php

echo "1 - função sem retorno e sem parametros <br>";

function teste(){
echo "Andiso Vanin";
}

teste();

echo "<hr>";




echo "2 - função com retorno e sem parametros <br>";

function teste2(){


$retorno = "oi gente";
return  $retorno;
}

$recebe = teste2();

echo "$recebe <br>";

echo "<hr>";


echo "3 - função sem retorno e com parametros <br>";
function teste3($a){
    echo "$a <br>";
}

teste3('oiii');
$x = 10;

teste3('olá');
teste3($x);


echo "<hr>";

echo "4 - função com retorno e com parametros <br>";
function teste4($x, $y){
    $soma = $x + $y;
    return $soma;
}

$resultado = teste4 (10,20);
echo "a soma é: $resultado";



echo "<hr>";
?>