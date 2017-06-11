<?php
require 'styl.php';
require 'projekt_polaczenie.php';
session_start();
//opcje do wyboru
echo '<nav>';
echo '<a href=plany.html>PANEL DODAWANIA PLANÓW</a><br>';
echo '<a href=wyswietl_plany.php>WYŚWIETL SWOJE PLANY</a><br>';
echo '<a href=urodziny.html>DODAJ SOLENIZANTA</a><br>';
echo '<a href=wydruk.php>WYDRUKUJ KARTKE NA URODZINY!</a><br>';
echo '<a href=wyloguj.php>WYLOGUJ</a>';


//dodatkowe opcje dla admina
$sql = "select uprawnienia from uzytkownicy where login='".$_SESSION['log']."'";
$wynik = $polaczenie -> query($sql);
$rekord=$wynik -> fetch_assoc();	
if ($rekord['uprawnienia'] == 1)
{
	echo '<br><a href=admin.php>OPCJE DLA ADMINA</a></li>';
}
echo '</nav>';
?>