<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Selecionar Elementos #02</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="conteudo exercicio">
    <div id="primeiro">#primeiro</div>
    <div>Segundo</div>
    <div class="terceiro ultimo"><span wb-attrib>.terceiro .ultimo</span></div>
    <script>
        document.querySelector('#primeiro').classList.add('destaque')
        const selecionar = seletor =>
            document.querySelectorAll(seletor).forEach(e => e.classList.add('destaque'))
        const desseletor = seletor =>
            document.querySelectorAll(seletor).forEach(e => e.classList.remove('destaque'))
        selecionar('div')
        desseletor('*')

        selecionar('.terceiro.ultimo')
        desseletor('*')

        selecionar(':not(#primeiro)')
        desseletor('*')

        selecionar(':nth-child(1)')
        desseletor('*')

        selecionar('div:nth-of-type(1)')
        desseletor('*')

        selecionar('[wb-attrib]')

    </script>
</body>
</html>