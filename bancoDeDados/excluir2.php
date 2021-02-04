<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class = "titulo">Excluir Registro #02</div>

<?php
require_once ('conexao.php');

$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$conexao = novaConexao();

if ($_GET['excluir']){
    $excluirSql = "DELETE FROM cadastro WHERE id = ?";
    $statement = $conexao->prepare(@$excluirSql);
    $statement->bind_param("i", $_GET['excluir']);
    $statement->execute();
}

$resultado = $conexao->query($sql);
$registros = [];
if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;
    }
}elseif($conexao->$error){
    Echo "Erro: " . $conexao->$error;
}
$conexao->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-Mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
    <?php foreach($registros as $registro): ?>
        <tr>
            <td><?= $registro['id'] ?></td>
            <td><?= $registro['nome'] ?></td>
            <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
            <td><?= $registro['email'] ?></td>
            <td>
                <a href="exercicio.php?dir=bancoDeDados&file=excluir2&excluir=<?= $registro['id'] ?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<style>
    table{
        font-size: 1.2rem;
    }
</style>