<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: <?=  $_SESSION['nome']?><br>
    <b>Email: <?= $_SESSION['email'] ?><br>
</p>
<?php
$_SESSION['email'] = 'gabrielfilho@zmail.com';
?>
<p>
    <a href='exercicio.php?dir=sessao_cookie&file=basico_sessao'>Voltar</a>
</p>