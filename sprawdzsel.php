<?php
require 'projekt_polaczenie.php';
$sql = "select sel from uzytkownicy where login ='".$_SESSION['log']."'";
$wynik = $polaczenie -> query($sql);
$rekord=$wynik -> fetch_assoc();

if ($rekord['sel']==0)
{
	echo "<script type=\"text/javascript\">window.alert('Brak uprawnien!'); window.location.href = 'projekt_glowna.php';</script>"; 
		exit;
	
}
?>