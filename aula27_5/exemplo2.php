<?php



    $numeros =  [3,5,8,10,20,23,57];
    // Função para criar valores
    // De um Vetor
    function soma ($vetor){


        $soma = 0;

        for($i=0;$i<count($vetor);$i++){


            //echo"$vetor[$i] <br>";

            $soma = $soma + $vetor[$i];
            
            //soma +- $vetor[$i]

            if ($vetor[$i] % 2 == 1){
                echo "<br> $vetor[$i] <br>";
            }
        }

        echo "A soma é $soma";
    }


    soma($numeros);



?>