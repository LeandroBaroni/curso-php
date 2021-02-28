<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Eventos #01</title>
    <link rel='stylesheet' href='css/estilo.css'>
    <script src='js/jquery.js'></script>
    <style>
        input {
            font-size: 2em;
        }
    </style>
</head>

<body class='conteudo exercicio'>
    <h1>Eventos #01</h1>
    <div id='posicao'></div>
    <div id='cliques'>Cliques: 0</div>
    <input type="text" placeholder="Cor de Background">

    <script>
        function mostrarPosicaoMouse(e){
            $('#posicao').html(`x: ${e.clientX} y: ${e.clientY}`)
        }
        $('body').on('mousemove', mostrarPosicaoMouse)
        $('#posicao').mouseover(e => {
            $('body').off('mousemove', mostrarPosicaoMouse)
        })

        $('#posicao').mouseleave(e => {
            $('body').mousemove(mostrarPosicaoMouse)
        })

        let cliques = 0
        $('body').click(e =>{
            $('#cliques').html(`Cliques: ${++cliques}`)
        })

        const backgroudOriginal = $('body').css('background-color')
        $('input').keyup(function (e){
            const valor = $(this).val()
            if(valor.match(/#[\da-fA-F]{3, 6}/)){
                $('body').css('backgroung-color', valor)
            }else{
                $('body').css('backgroung-color', backgroudOriginal)
            }
        })
    </script>
</body>