<div class="titulo">Inserir PDO</div>
<?php

require_once('conexao_pdo.php');

$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario)
    VALUES('Jorge Gimenez',
           '1975-08-28', 
           'jgimenez@hotmail.com', 
           'https://dccomics.com', 
           3, 
           26725.33
           )";
//echo $sql;
$conexao = novaConexao();
//print_r(get_class_methods($conexao));
if ($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id: $id";
}else{
    echo $conexao->errorCode();
    print_r($conexao->errorinfo());
}