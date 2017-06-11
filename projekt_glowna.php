<?php
require 'styl.php';
require 'projekt_polaczenie.php';

//zabezpieczenie przed bezposrednim wejsciem w plik
session_start();

if (!isset ($_SESSION['log']))
{
	echo "<script type=\"text/javascript\">window.alert('Nie ma tak latwo! :) Najpierw się zaloguj!'); window.location.href = 'projekt_logowanie.html';</script>"; 
		exit;
}
else
{
	echo '<center><h1>';
	echo 'Witaj '.ucfirst($_SESSION['log']).'!';
	echo '</h1></center>';
}

//zapytanie sql
$sql = "select * from uzytkownicy where login='".$_SESSION['log']."'";
$wynik = $polaczenie -> query($sql);
$rekord=$wynik -> fetch_assoc();


//opcje do wyboru
echo '<nav>';
if ($rekord['ins'] == 1)
{
echo '<a href=dodajplany.php>DODAJ PLANY</a><br>';
}

if ($rekord['sel'] == 1)
{
echo '<a href=wyswietl_plany.php>WYŚWIETL PLANY</a><br>';
}
if ($rekord['ins'] == 1)
{
echo '<a href=urodziny.html>DODAJ SOLENIZANTA</a><br>';
}
if ($rekord['sel'] == 1)
{	
echo '<a href=wydruk.php>URODZINY!</a><br>';
}


//dodatkowe opcje dla admina
	
if ($rekord['admin'] == 1)
{
	echo '<a href=admin.php>OPCJE DLA ADMINA</a><br>';
}
echo '<a href=wyloguj.php>WYLOGUJ</a>';
echo '</nav>';


?>