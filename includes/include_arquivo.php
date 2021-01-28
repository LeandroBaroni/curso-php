<?php
echo 'Está carregando: include_arquivo<br>';

$variavel = 'Estou definida';

//verifica se a função soma não existe
if(!function_exists('soma')) {
    function soma($a, $b) {
        return $a + $b;
    }
}