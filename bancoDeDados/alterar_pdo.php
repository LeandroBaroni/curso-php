<div class="titulo">Alterar PDO</div>
<?php
require_once "conexao_pdo.php";
$sql = "UPDATE cadastro 
    SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
    WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gui.com.br',
    'https://gui.com',
    1,
    21363.76,
    13
]);
if ($resultado){
    echo "Sucesso";
}else{
    print_r($stmt->errorInfo());
}