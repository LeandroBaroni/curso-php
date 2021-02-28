<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Manipulando Atributos</title>
    <link rel='stylesheet' href='css/estilo.css'>
    <script src='js/jquery.js'></script>
    <style>
        [wm-relogio] {
            text-align: center;
        }

        [wm-relogio] button {
            font-size: 1.6em;
            padding: 0px 25px;
            margin: 10px;
        }
    </style>
</head>

<body class='conteudo exercicio'>
<h1>Manipulando Atributos</h1>
<div wm-relogio='1000'></div>
<div wm-relogio='3000'></div>
<script>
    function Relogio(elemento) {
        const horaCerta = $('<p>').html('0')
        const botaoMenos = $('<button>').html('-')
        const botaoMais = $('<button>').html('+')

        const $elemento = $(elemento)
        $elemento.append(horaCerta, botaoMenos, botaoMais)

        const getIntervaloAtual =
            () => parseInt($elemento.attr('wm-relogio'))

        let temporizador = null
        const iniciar = () => {
            if (temporizador) clearInterval(temporizador)
            temporizador = setInterval(() => {
                horaCerta.html(new Date().toLocaleString('pt-BR'))
            }, getIntervaloAtual())
        }

        const alterarIntervalo = delta => {
            const novo = Math.max(getIntervaloAtual() + delta, 1000)
            $elemento.attr('wm-relogio', novo)
            iniciar()
        }

        botaoMenos.click(e => alterarIntervalo(1000))
        botaoMais.click(e => alterarIntervalo(-1000))
        iniciar()
    }

    $('[wm-relogio]').each((i, e) => new Relogio(e))

    // $('[wm-relogio]').attr('opa') // ler
    // $('[wm-relogio]').attr('opa', 3) // alterar ou incluir
    $('[wm-relogio]').attr({ opa: 1, novo: true })
    $('[wm-relogio]').removeAttr('opa').removeAttr('novo')
</script>
</body>