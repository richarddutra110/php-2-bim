<?php

$teste = [10, 'oi', 1.5, true];

$quantidade = count($teste);

//echo $quantidade;

echo "numero de elementos no vetor: $quantidade";
echo "<hr>";

for ($i = 0; $i < $quantidade; $i++){
    echo "valor do i = $i - valor: $teste[$i]<br>";
}

echo"<hr>";

echo "ESCOLHENDO UM NÚMERO ALEATÓRIO <br>";
$nq = (rand (1,50))/10;
//$nq = rand (1,500);
echo $nq;








echo "<hr>";

echo "SOMANDO OS VALORES DE UM VETOR E FAZENDO A MÉDIA DOS VALORES<br>";

$vetor = [1, 3, 5, 7, 9];

$qnt = count($vetor);

$soma = 0;



for($x = 0; $x < $qnt; $x++){

    $soma = $soma +  $vetor[$x];

}



echo " Soma dos valores do vetor = $soma <br>";

$media = $soma/$qnt;

echo "Média dos valores do vetor = $media"
?>