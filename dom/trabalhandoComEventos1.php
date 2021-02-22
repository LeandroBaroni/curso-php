<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Trabalhando com Eventos #01</title>
    <link rel='stylesheet' href='css/estilo.css'>
</head>

<body class="conteudo exercicio">
    <div>        <!-- onclick="navegarEm5s(event)" -->
        <a espera-um-pouco href="https://google.com.br">Google</a>
    </div>
    <script>
        function navegarEm5s(e){
            e.preventDefault()
            console.log('saindo em 5 seg....')
            setTimeout(() =>{
                const link = e.target
                window.location.href = link.href
            }, 5000)
        }

        //a forma abaixo é mais certa pois a chamada de função fica implicita
        //const a = document.querySelector('a')
        //a.onclick = navegarEm5s
        //ou

        const a = document.querySelector('[espera-um-pouco]')
        a.onclick = navegarEm5s
    </script>
</body>