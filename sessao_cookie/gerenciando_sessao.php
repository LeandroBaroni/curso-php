<div class="titulo">Gerenciamento de Sessão</div>
<?php
session_start();
echo session_id();
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>';

//gerar novo id da sessão
if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15){
    session_destroy();
}