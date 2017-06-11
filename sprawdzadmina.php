<?php
require 'projekt_polaczenie.php';
$sql = "select admin from uzytkownicy where login ='".$_SESSION['log']."'";
$wynik = $polaczenie -> query($sql);
$rekord=$wynik -> fetch_assoc();

if ($rekord['admin']==0)
{
	echo "<script type=\"text/javascript\">window.alert('Brak uprawnien administratora!'); window.location.href = 'projekt_glowna.php';</script>"; 
		exit;
	
}
?>