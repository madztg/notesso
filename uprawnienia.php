<?php
session_start();
require 'styl.php';
require 'projekt_polaczenie.php';
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';
require 'sprawdzadmina.php';

$sql = "select * from uzytkownicy";
$wynik = $polaczenie -> query($sql);

echo '<center><h1>Nadaj lub zabierz uprawnienia</h1></center>';
echo '<center>';
echo '<table border>';
echo '<th>ID<th>Login<th>Uprawnienia admina<th>Select<th>Insert<th>Update<th>Delete';
while (($rekord=$wynik -> fetch_assoc()) != null)
{
	
	echo '<tr>';
	echo '<td>'.$rekord['id_uzytk'].'</td>';
	echo '<td>'.$rekord['login'].'</td>';
	echo '<td>'.$rekord['admin'].' <a href=upradm.php?to_up='.$rekord['id_uzytk'].'>Zmień</a></td>';
	echo '<td>'.$rekord['sel'].' <a href=uprsel.php?to_up='.$rekord['id_uzytk'].'>Zmień</a></td>';
	echo '<td>'.$rekord['ins'].' <a href=uprins.php?to_up='.$rekord['id_uzytk'].'>Zmień</a></td>';
	echo '<td>'.$rekord['upd'].' <a href=uprupd.php?to_up='.$rekord['id_uzytk'].'>Zmień</a></td>';
	echo '<td>'.$rekord['del'].' <a href=uprdel.php?to_up='.$rekord['id_uzytk'].'>Zmień</a></td>';
	
	
	
}
echo '</table>';
echo '<br>';
echo '<center><a href=admin.php>Powrót do menu admina</a></center>';
?>