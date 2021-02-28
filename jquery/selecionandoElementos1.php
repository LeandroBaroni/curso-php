<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Selecionando Elementos #01</title>
    <link rel='stylesheet' href='css/estilo.css'>
    <script src='js/jquery.js'></script>
    <style>
        .negrito {
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form input,
        form select,
        form button {
            margin: 10px;
            font-size: 1.6em;
        }
    </style>
</head>

<body class='conteudo exercicio'>
    <h1>Selecionando Elementos #01</h1>
    <div>
        <p>Parágrafo
            <span class='negrito'>dentro span</span>
        </p>
    </div>
    <div>
        <ul id='feira'>
            <li>Arroz</li>
            <li wm-obrigatorio>Feijão</li>
            <li class='opcional'>Carne</li>
            <li class='opcional'>Ovo</li>
        </ul>
    </div>
    <form>
        <input type='text' name='texto'>
        <input type='password' name='senha'>
        <input type='checkbox' name='check1'>
        <input type='radio' name='radio1'>
        <input type='file' name='arquivo'>
    </form>

    <script>
        $('feira').addClass('destaque').removeClass('destaque')
        $('li').addClass('destaque')
        $('[wm-obrigatorio]').removeClass('destaque')
        $('li.opcional').removeClass('destaque')
        $('dev p span').addClass('destaque')

        //Exclusivos jQuery
        $('li:first').css('border', 'solid 3px yellow')
        $('li:odd').css('border', 'solid 10px orange')
        $('li:gt(1)').css('border', 'solid 3px white')
        $('li:not(:last)').css('border', 'none')
        $('li:contains("r")').css('background-color', 'black')

        $('form *').hide()
        $('form :text').show()
        $('form :password').show()
        $('form :checkbox').show()
        $('form :radio').show()
        $('form :file').show()
    </script>
</body>