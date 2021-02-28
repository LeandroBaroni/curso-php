<?php
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <?php require_once('header.php'); ?>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="html/index.php">Extra: HTML</a>
        <a href="exercicioCSS/index.php">Extra: CSS</a>
        <a href="dom/index.php">HTML, JS e CSS</a>
        <a href="ajax/index.php">Ajax</a>
        <a href="jquery/index.php">JQuery</a>
        <a href="banco/index.#">B. Relacional</a>
        <a href="logout.php">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php require_once('menu.php'); ?>
        </div>
    </main>
    
    <footer class="rodape">
        <?php require_once('rodape.php'); ?>
    </footer>
</body>
</html>