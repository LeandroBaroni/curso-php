<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>
<?php 
echo __NAMESPACE__.'<br>';
include('use_as_arquivo.php');
function soma($a, $b){
    return $a . $b; //sei que está errado
}

class Classe{
    public $var;

    function func(){
        echo __NAMESPACE__.'=>'.
            __CLASS__.'->'. __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante.'<br>';

use const Nome\Bem\Grande\constante;
echo constante.'<br>';

use Nome\Bem\Grande as ctx;

echo soma(1, 3).'<br>';
echo ctx/soma(2, 3).'<br>';
// use function nome\Bem\Grande\soma;
use function nome\Bem\Grande\soma as somaReal;
echo somaReal(100, 212).'<br>';

$a = new Classe();
$a ->func();
$b = new \Nome\Bem\Grande\Classe();

$c = new ctx\Classe();
$c->func();
use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();