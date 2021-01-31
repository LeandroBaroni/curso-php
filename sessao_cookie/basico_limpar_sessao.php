<?php
session_start();
session_destroy();
header('Location: exercicio.php?dir=sessao_cookie&file=basico_sessao');