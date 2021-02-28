<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Manipulando CSS</title>
    <link rel='stylesheet' href='css/estilo.css'>
    <script src='js/jquery.js'></script>
</head>

<body class='conteudo exercicio'>
    <h1>Manipulando CSS</h1>
    <div id='div1'>1</div>
    <div id='div2'>2</div>
    <div id='div3'>3</div>
    <div id='resultado'></div>
    <script>
        const fonte = $('#div1').css('font-family')
        $('#resultado').append(`Fonte é ${fonte}`)

        $('#div1').css('font-size', '3em')
        $('#div1').css({'font-size': '3.5em', 'color': 'yellow'})
        $('#div1').css('font-size', function(){
            return `$(2 * 2)em`
        })

        $('#div2').addClass('destaque')

        const temClasse = $('#div2').hasClass('destaque')
        $('#resultado').append(`<br>Tem class? ${temClasse}`)

        $('#div2').removeClass('destaque')
        $('#div2').toggleClass('destaque')
        $('#div3').toggleClass('destaque')
    </script>
</body>