<div class="titulo">Inserir Registro</div>
<?php
require_once 'conexao.php';

$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario)
    VALUES(
        'Pedro Cardoso',
        '1993-01-23',
        'pedrinho@hotmail.com',
        null,
        1,
        21236.26
    )
";

$conexao = novaConexao();
$resultado = $conexao->query($sql);
if($resultado){
    echo 'Sucesso :}';
}else{
    echo 'Erro:' . $conexao->error;
}
$conexao->close();