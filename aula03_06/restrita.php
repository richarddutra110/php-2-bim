    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        .center { 
            text-align: center;
            margin-top: 350px;
        }

        body{
    
            
            background-color: black;
        }
        
        h4{
            color:white;
        }

        h1{
            color:white;
        }
        
        
        </style>
        <body class="center">


        <?php

        session_start();
        if($_SESSION['logado'] != 1){
            header("location: index.php");
        }

        $nome = $_SESSION['nome'];

            echo "<h4>bem vindo $nome </h4><br>";



            echo "<h4>você tá na area secreta<h4>";

            echo "<br>";


            echo "<h4>-vlad da area secreta 2022</h4>";

            echo "<br>";
         

            echo "<h4><a href='logout.php'> SAIR </a><h4>";


        ?>




    </body>
    </html>
    
    
    
    