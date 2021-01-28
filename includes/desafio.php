<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');

$usuario = new Usuario('Leandro Baroni', 27, 'leandro_baroni');
echo $usuario->apresentar();
unset($usuario);