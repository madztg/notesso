<?php
session_start();
require 'sprawdzadmina.php';
require 'projekt_polaczenie.php';

$sql = "select * from uzytkownicy where id_uzytk=$_GET[to_up]";
$wynik = $polaczenie->query($sql);
$rekord=$wynik->fetch_assoc();

$id = $_GET['to_up'];
$upr = $rekord['admin'];

if ($upr == 0)
{
	$upradm = "update uzytkownicy set admin=1, sel=1, ins=1, upd=1, del=1 where id_uzytk=$id";
	$polaczenie->query($upradm);
	echo "<script type=\"text/javascript\">window.alert('Uprawnienia nadane, ".$_SESSION['log']."!'); window.location.href = 'uprawnienia.php';</script>"; 
exit;
}
else
{
	$upradm = "update uzytkownicy set admin=0, upd=0, del=0 where id_uzytk=$id";
	$polaczenie->query($upradm);
	echo "<script type=\"text/javascript\">window.alert('Uprawnienia zabrane, ".$_SESSION['log']."!'); window.location.href = 'uprawnienia.php';</script>"; 
exit;
}


?>