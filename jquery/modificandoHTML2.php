<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Modificando HTML #02</title>
    <link rel='stylesheet' href='css/estilo.css'>
    <script src='js/jquery.js'></script>
</head>

<body class='conteudo exercicio'>
    <h1>Modificando HTML #02</h1>
    <div id='div1'>1</div>
    <div id='div2'>2</div>
    <div id='div3'>3</div>
    <p class='numero'>4</p>
    <p class='numero'>5</p>

    <script>
        //div 1
        $('#div1').append(', 2')
        $('#div1').prepend('0, ')

        $('<span>, 3 </span>').appendTo('#div1')
        $('<span>-1, </span>').prependTo('#div1')

        //div 2

        $('#div2').before('<p>Antes 2</p>')
        $('#div2').after('<p>Depois 2</p>')

        $('<p>Antes 3</p>').insertBefore('#div3')
        $('<p>Depois 3</p>').insertAfter('#div3')

        //numero
        //$('p.numero').wrap('<div>')
        $('p.numero').wrapAll('<div id="div4">')
        $("div4").empty()
        $('#div3, #div4').prev().remove

        //$('<div>Substituto</div>').replaceAll('body > p')
        // $('body > p').replaceWith('<div>Substituto</div>')

        $('body > p').replaceWith(function(){
            return $('<div>').html($(this).html())
        })
    </script>
</body>