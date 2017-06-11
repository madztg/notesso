<?php
session_start();
require 'styl.php';
require 'projekt_polaczenie.php';
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';
require 'sprawdzadmina.php';

$sql = "select * from uzytkownicy";
$wynik = $polaczenie -> query($sql);

echo '<center><h1>Usuwanie</h1></center>';
echo '<center>';
echo '<table border>';
echo '<th>ID<th>Login<th>Uprawnienia admina<th>Usuń';
while (($rekord=$wynik -> fetch_assoc()) != null)
{
	
	echo '<tr>';
	echo '<td>'.$rekord['id_uzytk'].'</td>';
	echo '<td>'.$rekord['login'].'</td>';
	echo '<td>'.$rekord['admin'].'</td>';
	echo '<td><a href=usunuzytk.php?to_del='.$rekord['id_uzytk'].'>Usuń</a></td>';

	
}
echo '</table>';
echo '<br>';
echo '<center><a href=admin.php>Powrót do menu admina</a></center>';
?>