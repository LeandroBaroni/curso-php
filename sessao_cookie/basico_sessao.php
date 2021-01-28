<div class="titulo">Sessão</div>
<?php

session_start();

print_r($_SESSION);
echo "<br>";
if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}
if(!$_SESSION['email']){
    $_SESSION['email'] = 'gabriel@hotmail.com';
}
?>
<p>
    <a href = '/sessao/basico_alterar_sessao.php'>
        Alterar Sessão
    </a>
</p>