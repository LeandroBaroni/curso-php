<div class="titulo">Datas #01</div>
<?php
echo time().'<br>';
echo date('D, d \d\e M \d\e Y H:m:s') . '<br>';
echo strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$proximoMes = strtotime('+1 month');
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $proximoMes) . '<br>';

$proximoSemestre = strtotime('+1 semester');
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $proximoSemestre) . '<br>';

$proximoAno = strtotime('+1 year');
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $proximoAno) . '<br>';

$dataFixa = mktime(15, 30, 30, 03, 21, 2021);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>'; 