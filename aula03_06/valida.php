<?php

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user = 'RICHARD';
    $pass = '1234';

    if(($usuario == $user) && ($senha == $pass)){
        //echo "OK! usuário validado";
        session_start();

        $_SESSION['nome'] = $usuario;
        $_SESSION['logado'] = 1;


        header("location: restrita.php");
    }

    else{
        echo "usuário e/ou senha incorretos...";
    }
    
?>