<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        Exercícios HTML
    </header>
    <nav>
        <a href wm-nav="exercicios/teste.php">00 - Teste</a>
        <a href wm-nav="exercicios/texto.php">01 - Texto</a>
        <a href wm-nav="exercicios/texto2.php">02 - Texto 2</a>
        <a href wm-nav="exercicios/listas.php">03 - Listas</a>
        <a href wm-nav="exercicios/listasAninhadas.php">04 - Listas Aninhadas</a>
        <a href wm-nav="exercicios/links01.php">05 - Links #01</a>
        <a href wm-nav="exercicios/links02.php">06 - Links #02</a>
        <a href wm-nav="exercicios/tabelas.php">07 - Tabelas</a>
        <a href wm-nav="exercicios/form/form.php">08 - Formulários</a>
        <a href wm-nav="exercicios/imagens.php">09 - Imagens</a>
        <a href wm-nav="exercicios/videos.php">10 - Vídeos</a>
        <a href wm-nav="exercicios/tagsNaoVisuais.php">11 - Tags</a>
    </nav>
    <section id="conteudo"></section>
    <footer class="rodape">
        <?php require_once('rodape.php'); ?>
    </footer>
    <script>
        document.querySelectorAll('[wm-nav]').forEach(link => {
            link.onclick = function(e){
                e.preventDefault()
                const conteudo = document.getElementById('conteudo')
                fetch(link.getAttribute('wm-nav'))
                    .then(resp => resp.text())
                    .then(html => conteudo.innerHTML = html)
            }
        })
    </script>
</body>
</html>