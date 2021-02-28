<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Modificando HTML #03</title>
    <link rel='stylesheet' href='css/estilo.css'>
    <script src='js/jquery.js'></script>
</head>

<body class='conteudo exercicio'>
    <h1>Modificando HTML #03</h1>
    <div id='conteudo'></div>

    <script>
        $(document).ready(function(){
            const pessoas = [
                { nome: 'Ana', nota: 9.1 },
                { nome: 'Bianca', nota: 8.4 },
                { nome: 'Carlos', nota: 7.6 },
                { nome: 'Julia', nota: 9.7 }
            ]

            const linhas = pessoas.map(p => {
                const tdNome = $('<td>').html(p.nome)
                const tdNota = $('<td>').html(p.nota)
                //return $('<tr>').append([tdNome, tdNota])
                //return $('<tr>').append(tdNome).append(tdNota)
                return $('<tr>').append(tdNome, tdNota)
            })

            const tabela = $('<table>').append(linhas).css('border', 'solid 4px')
            $('#conteudo').append(tabela)
        })
    </script>
</body>