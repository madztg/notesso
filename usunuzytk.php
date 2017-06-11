<?php
session_start();
require 'styl.php';
require 'projekt_polaczenie.php';
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';
require 'sprawdzadmina.php';

if ($_GET['to_del'] != $id)
{
$sql = "delete from uzytkownicy where id_uzytk=$_GET[to_del]";
$wynik = $polaczenie ->query($sql);

$sql = "delete from plany where id_uzytk=$_GET[to_del]";
$wynik = $polaczenie ->query($sql);

$sql = "delete from urodziny where id_uzytk=$_GET[to_del]";
$wynik = $polaczenie ->query($sql);

echo "<script type=\"text/javascript\">window.alert('Uzytkownik usuniety, ".$_SESSION['log']."!'); window.location.href = 'usuwanie.php';</script>"; 
exit;
}
else
{
	echo "<script type=\"text/javascript\">window.alert('Nie mozesz usunac sam siebie, ".$_SESSION['log']."!'); window.location.href = 'usuwanie.php';</script>"; 
exit;
}

