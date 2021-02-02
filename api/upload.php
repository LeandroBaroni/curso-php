<div class="titulo">Upload</div>
<?php
    print_r($_FILES);

    if($_FILES && $_FILES['arquivo']){
        $pastaUpload = '/var/www/html/curso-php/api/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        echo $arquivo . '<br>';
        $tmp = $_FILES['arquivo']['tmp_name'];

        if(move_uploaded_file($tmp, $arquivo)){
            echo "Arquivo válido e enviado com sucesso. <br>";
        }else{
            echo "Erro de Upload de arquivo <br>";
        }
    }
?>
<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button{
        font-size: 1.2rem;
    }
</style>