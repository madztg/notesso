<?php

function zapisz_log($data, $godzina, $login)

{
$plik = fopen('log.txt', 'a');
fputs($plik,"$data;$godzina;$login"."\n");
}

?>