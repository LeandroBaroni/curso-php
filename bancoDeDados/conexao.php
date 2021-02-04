<?php
function novaConexao($banco = 'curso_php'){
    $servidor = '127.0.0.1:3306';
    $usuario = 'root';
    $password = 'nightwing';
    $conexao = new mysqli($servidor, $usuario, $password, $banco);
    if($conexao->connect_error){
        die('Erro: ' . $conexao->connect_error);
        /* a forma abaixo realiza a mesma coisa
        echo 'Erro: ' . $conexao->connect_error;
        exit();*/
    }
    return $conexao;
}