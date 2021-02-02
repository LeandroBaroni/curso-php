<?php
session_start();
//valores vindos do 'name' do input
$email = $_POST['email'];
$senha = $_POST['senha'];

if($_SESSION['email']){
    $usuarios = [
        [
            "nome" => "Leandro Baroni",
            "email" => "leandrobaroni2103@hotmail.com",
            "senha" => "1234567",
        ],
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@hotmail.com",
            "senha" => "7654321",
        ],
    ];
    foreach($usuarios as $usuario){
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida){
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 *24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            
            header('Location: index.php');
        }
    }
    if(!$_SESSION['usuario']){
        $_SESSION['erros'] = ['Usuario/Senha inválida!'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <?php require_once('header_login.php'); ?>
    </header>
    <nav class="navegacao">
        
    </nav>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach($_SESSION['erros'] as $erros): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    
    <footer class="rodape">
        <?php require_once('rodape.php'); ?>
    </footer>
</body>
</html>