<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Modificando HTML #01</title>
    <link rel='stylesheet' href='css/estilo.css'>
    <script src='js/jquery.js'></script>
</head>

<body class='conteudo exercicio'>
    <h1>Modificando HTML #01</h1>
    <div id='conteudo1'></div>
    <div id='conteudo2'></div>
    <div id='conteudo3'></div>
    <div>Sem ID!</div>

    <script>
        //conteudo 1
        $('#conteudo1').append('<p>1</p>')

        //conteudo 2
        const elementos = [
            $('<li></li>').append('Arroz'),
            $('<li>').append('Feijão'),
            $('<li>').append('Carne'),
        ]
        const lista = $('<ul><li>Sorvete</li></ul>').append(elementos)
        $('#conteudo2').append(lista)

        //conteudo 3
        $('#conteudo3').append(['<h1>1</h1>', '<h2>2</h2>']).prepend('<h1>-0</h1>')
        $('#conteudo3').html('<h1>123</h1>')
        $('#conteudo3').text('<h1>123</h1>')

        //alterando todos (usando div)
        $('div[id]').html('<strong>Todos!</strong>')

    </script>
</body>