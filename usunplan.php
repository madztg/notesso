<?php
session_start();
require 'styl.php';
require 'projekt_polaczenie.php';
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';

$sql = "delete from plany where id_planu=$_GET[to_plan]";
$wynik = $polaczenie -> query($sql);
echo "<script type=\"text/javascript\">window.alert('Plany usuniete, ".$_SESSION['log']."!'); window.location.href = 'wyswietl_plany.php';</script>"; 
exit;



?>