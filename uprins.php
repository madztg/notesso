<?php
session_start();
require 'projekt_polaczenie.php';
require 'sprawdzadmina.php';

$sql = "select * from uzytkownicy where id_uzytk=$_GET[to_up]";
$wynik = $polaczenie->query($sql);
$rekord=$wynik->fetch_assoc();

$id = $_GET['to_up'];
$upr = $rekord['ins'];

if ($upr == 0)
{
	$upradm = "update uzytkownicy set ins=1 where id_uzytk=$id";
	$polaczenie->query($upradm);
	echo "<script type=\"text/javascript\">window.alert('Uprawnienia nadane, ".$_SESSION['log']."!'); window.location.href = 'uprawnienia.php';</script>"; 
exit;
}
else
{
	$upradm = "update uzytkownicy set ins=0 where id_uzytk=$id";
	$polaczenie->query($upradm);
	echo "<script type=\"text/javascript\">window.alert('Uprawnienia zabrane, ".$_SESSION['log']."!'); window.location.href = 'uprawnienia.php';</script>"; 
exit;
}


?>