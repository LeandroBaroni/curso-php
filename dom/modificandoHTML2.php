<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Modificando HTML #02</title>
    <link rel='stylesheet' href='css/estilo.css'>
</head>

<body class='conteudo exercicio'>
    <div>
        <p>Texto Inicial</p>
    </div>
    <script>
        const div = document.querySelector('div')
        div.innerHTML = 'Texto alterado'
        //div.outerHTML = 'Texto alterado'
        div.insertAdjacentHTML('beforebegin', '<p>Antes da div</p>')
        div.insertAdjacentHTML('afterbegin', '<p>Depois da div</p>')
        div.insertAdjacentHTML('beforeend', '<p>Antes do fim</p>')
        div.insertAdjacentHTML('afterend', '<p>Depois do fim</p>')

        //somente o texto(sem tags)
        console.log(div.innerText)
    </script>
</body>

</html>