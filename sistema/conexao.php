<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error ) {
    die("Conexão falhou". $conexao ->connect_error);
} else {
    echo "conexão com sucesso ";
}


?>