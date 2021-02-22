<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Selecionar Elementos #04</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="conteudo exercicio">
    <div>
        <p>Início</p>
    </div>
    <div>
        <ul>
            <li>Pedro</li>
            <li>Ana</li>
            <li>Bia</li>
        </ul>
    </div>
    <div>
        <p>Fim</p>
    </div>
    <script>
        function log(){
            console.log(this)
        }
        HTMLCollection.prototype.log = log
        HTMLElement.prototype.log = log
        NodeList.prototype.log = log
        Node.prototype.log = log

        const lista = document.querySelector('div ul')
        lista.parentNode.log()
        lista.childNodes.log()

        const primeiro = lista.firstChild
        primeiro.log()
        primeiro.nextSibling.log()

        const ultimo = lista.lastChild
        ultimo.log()
        ultimo.previousSibling.log()

        lista.children.log()
        lista.firstElementChild.log()
        lista.lastElementChild.log()
        lista.parentNode.previousSibling.log()
        lista.parentNode.nextSibling.log()

        document.querySelectorAll('div ul li').log()


    </script>
</body>

</html>