<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "testemysqli";


$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao -> connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

//echo "Conectado com sucesso";
?>