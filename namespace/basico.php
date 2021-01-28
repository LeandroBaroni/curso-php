<?php namespace contexto; ?>
<div class="titulo">Exemplo Básico</div>
<?php
    echo __NAMESPACE__.'<br>';
    const constante1 = 123;
    define('contexto\constante2', 234);
    define(__NAMESPACE__.'\constante3', 345);
    define('outro_contxto\constante4', 3432);

    echo constante1.'<br>';
    echo constante2.'<br>';
    echo constante3.'<br>';
    echo constante4.'<br>';
    echo constant(__NAMESPACE__.'\constante3').'<br>';

    function soma($a, $b){
        return $a + $b;
    }

    function strpos($str, $text){
        echo "Buscando o texto '{$text}' em '{$str}'<br>";
        return 1;
    }

    echo strpos('texto generico para busca', 'busca').'<br>';
    echo \strpos('texto generico para busca', 'busca').'<br>';
