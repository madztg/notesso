<?php
session_start();
require 'styl.php';
require 'projekt_polaczenie.php';
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';
require 'sprawdzadmina.php';

echo '<center><h1>';
	echo 'Witaj '.ucfirst($_SESSION['log']).'!';
	echo '</h1></center>';
	
echo '<nav>';
echo '<a href=uprawnienia.php>UPRAWNIENIA</a><br>';
echo '<a href=usuwanie.php>USUŃ UŻYTKOWNIKA</a><br>';
echo '<a href=pdf.php>LISTA UŻYTKOWNIKÓW W PDF</a><br>';
echo '<a href=projekt_glowna.php>POWRÓT DO GŁÓWNEGO MENU</a>';
echo '</nav>';



?>

