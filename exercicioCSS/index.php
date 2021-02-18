<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capítulo CSS</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <style>
        html {
            height: 100%;
        }
        
        body {
            margin: 0;
            font-family: 'Oswald', sans-serif;
            background-color: lightgray;
            height: 100%;
        }
        
        .conteudo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100%;
        }
        
        .menu-principal {
            min-width: 400px;
            text-align: center;
        }
        
        .menu-principal h1 {
            background: #333;
            color: #fff;
            border-bottom: solid 5px #4faddb;
            padding: 15px 0px;
            margin: 0;
        }
        
        .menu-principal nav {
            display: inline-block;
            background-color: #fff;
            min-width: 200px;
        }
        
        .menu-principal a {
            display: block;
            padding: 10px 0px;
            text-decoration: none;
            color: #222;
            font-size: 1.2em;
        }
        
        .menu-principal a:hover {
            background-color: rgba(79, 173, 219, .4);
        }
    </style>
</head>
<body>
    <div class="conteudo">
        <div class="menu-principal">
            <h1>Exercícios de CSS</h1>
            <nav>
                <a href="intro.php">CSS Intro</a>
                <a href="anatomia.php">Anatomia CSS</a>
                <a href="origem.php">Origem</a>
                <a href="classeTag.php">Criando Classe <strong>.tag</strong></a>
                <a href="seletores.php">Seletores</a>
                <a href="especificidade1.php">Especificidade CSS #01</a>
                <a href="especificidade2.php">Especificidade CSS #02</a>
                <a href="heranca.php">Herança</a>
                <a href="box.php">Box Model</a>
                <a href="margin.php">Margin Collapse</a>
                <a href="display.php">Display</a>
                <a href="alturaLargura.php">Altura & Largura</a>
                <a href="tamanhoBox.php">Box Sizing</a>
                <a href="overflow.php">Overflow</a>
                <a href="float.php">Float</a>
            </nav>
            <nav>
                <a href="cores.php">Cores</a>
                <a href="unidades1.php">Unidades #01</a>
                <a href="unidades2.php">Unidades #02</a>
                <a href="texto.php">Texto</a>
                <a href="position.php">Position</a>
                <a href="mediaQuery.php">Media Query</a>
                <a href="desafioMenu.php">Desafio Menu</a>
                <a href="desafioCard.php">Desafio Card</a>
                <a href="flexbox1.php">Flex Box #1</a>
                <a href="flexbox2.php">Flex Box #2</a>
                <a href="flexbox3.php">Flex Box #3</a>
                <a href="flexboxMenu.php">Desafio Menu (Flex Box)</a>
                <a href="cssgrid1.php">CSS Grid #1</a>
                <a href="cssgrid2.php">CSS Grid #2</a>
                <a href="cssgrid3.php">CSS Grid #3</a>
            </nav>
        </div>
    </div>
</body>
</html>