</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Trabalhando com Eventos #03</title>
    <style>
        body {
            margin: 0;
            display: flex;
        }
        
        .esquerda {
            height: 100vh;
            width: 50%;
            background-color: coral;
        }
        
        .direita {
            height: 100vh;
            width: 50%;
            background-color: cornflowerblue;
        }
        
        .item {
            border: solid 5px black;
            background-color: darkgrey;
            color: white;
            height: 100px;
            font-size: 40px;
            margin: 10px;
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="esquerda" wm-dropzone>
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
    </div>
    <div class="direita" wm-dropzone></div>
    <script>
        const itens = document.querySelectorAll('[wm-dropzone] .item')
        itens.forEach((item, index) => {
            item.draggable = true
            item.id = item.id || `draggable-item-${index}`
            item.ondragstart = e =>
                e.dataTransfer.setData('item-id', e.target.id)

        })
        const dropzones = document.querySelectorAll('[wm-dragzone]')
        dropzones.forEach(dropzone => {
            dropzone.ondragover = e => e.preventDefault()
            dropzone.ondrop = function(e) {
                const id = e.dataTransfer.getData('item-id')
                const item = document.getElementById(id)
                e.target.appendChild(item)
            }
        })
    </script>
</body>

</html>