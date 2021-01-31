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
print_r($_SESSION);
?>
<p>
    <a href = 'exercicio.php?dir=sessao_cookie&file=basico_alterar_sessao'>
        Alterar Sessão
    </a>
</p>
<p>
    <a href = 'exercicio.php?dir=sessao_cookie&file=basico_limpar_sessao'>
        Limpar Sessão
    </a>
</p>