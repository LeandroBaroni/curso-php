<div class="titulos">Lendo Arquivos</div>
<?php
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
echo '<br>';
fclose($arquivo);

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho;
echo fread($arquivos, $tamanho);
fclose($arquivo);

echo '<hr>';
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo '<hr>';

//arquivo nao foi criado e fica em loop o carregamento da pagina
/*$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgets($arquivo). '<br>';
}
fclose($arquivo);*/

