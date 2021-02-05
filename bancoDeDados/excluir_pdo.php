<div class="titulo">Excluir PDO</div>
<?php
require_once "conexao_pdo.php";
$conexao = novaConexao();

$sql = "DELETE FROM cadastro WHERE id = ?";
$stmt = $conexao->prepare($sql);
if($stmt->execute([11])){
    $resultado = $stmt->fetch();
    echo "Sucesso <br>";
}else{
    echo "Código: " . $stmt->errorCode()."<br>";
    print_r($stmt->errorInfo());

}
$conexao->close();