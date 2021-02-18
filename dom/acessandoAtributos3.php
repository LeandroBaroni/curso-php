<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Acessando Atributos #03</title>
    <link rel='stylesheet' href='css/estilo.css'>
</head>

<body class='conteudo exercicio'>
    <div>
        <ul id="compras" destino='escritório' data-urgencia="5">
            <li>Café</li>
            <li>Água</li>
            <li>Copo Descartável</li>
        </ul>
    </div>
    <script>
        const lista = document.querySelector('#compras')
        //somente leitura
        console.log(lista.attributes)
        console.log(lista.attributes[0])
        console.log(lista.attributes.id)
        console.log(lista.attributes.destino)
        console.log(lista.attributes['data-urgencia'])

    </script>
</body>

</html>