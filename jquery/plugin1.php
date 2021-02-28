<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Plugin #01</title>
    <link rel='stylesheet' href='css/estilo.css'>
    <script src='js/jquery.js'></script>
</head>

<body class='conteudo exercicio'>
    <h1>Plugin #01</h1>
    <div>
        {{ 1 + 2 }}
        Texto 1
        {{ 3 ** 3 }}
        Texto 2
        {{ console.log('Funcionou!') }}
        Texto 3
        {{ (function() { return 'Legal!!!' })() }}
        Texto Final
    </div>

    <script>
        //const $ = { nome: 'Não é o jQuery'}
        (function ($){
            $.fn.interpretar = function(){
                const retirarChaves = s => s.substring(2, s.length -2)
                const conteudo = $(this).html()
                const expressoesComChaves = conteudo.match(/\{\{.+\}\}/g)
                const expressoes = expressoesComChaves.map(retirarChaves)
                const resultados = expressoes.map(e => eval(e))

                let conteudoFinal = conteudo
                for (let i =0; i< expressoesComChaves.length; i++){
                    conteudoFinal = conteudoFinal.replace(
                        expressoesComChaves[i], resultados[i]
                    )
                }
                $(this).html(conteudoFinal)
            }
        })(jQuery)
        $('div').interpretar()
    </script>
</body>