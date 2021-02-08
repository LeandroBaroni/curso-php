<div class="titulo">Consulta PDO</div>
<?php
require_once "conexao_pdo.php";
$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";

$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//print_r($resultado);

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':inicio', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

if ($stmt->execute()){
    $resultado = $stmt->fetchAll();
}else{
    echo "Código: " .$stmt->errorCode()."<br>";
    print_r($stmt->errorCode());
}

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
//$stmt->bindValue(':inicio', 9, PDO::PARAM_INT);
if ($stmt->execute([':id' => 9])){
    $resultado = $stmt->fetch();
}else{
    echo "Código: " .$stmt->errorCode()."<br>";
    print_r($stmt->errorCode());
}
$conexao->close();