<div class="titulo">Escrever Arquivos</div>
<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor Inicial\n");
$str = "Segunda Linha\n";
fwrite($arquivo, $str);
echo 'deu certo?';
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo Conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "com novos Valores\n");
fwrite($arquivo, "Adicionados em segundo momento\n");
fclose($srquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt'. 'x');
fwrite($arquivo, "Arquivo Novo");
fclose($arquivo);
