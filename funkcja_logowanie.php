<?php
require 'projekt_polaczenie.php';
require 'zapisz_log.php';
$sql = "select id_uzytk from uzytkownicy where login='".$_POST['login']."' and haslo='".sha1($_POST['haslo'])."'";
$wynik = $polaczenie -> query($sql);

if (($rekord=$wynik -> fetch_assoc()) == 0)
{
	echo "<script type=\"text/javascript\">window.alert('Niepoprawne dane, sprobuj jeszcze raz'); window.location.href = 'projekt_logowanie.html';</script>"; 
		exit;
}
else
{
	session_start();
	$_SESSION['log'] = $_POST['login'];
	zapisz_log(date("Y-m-d"), date("H:i:s"), $_SESSION['log']);
	header('Location: projekt_glowna.php');
}

?>