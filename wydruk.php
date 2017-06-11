<?php
session_start();
require 'styl.php';
require 'projekt_polaczenie.php';
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';
require 'sprawdzsel.php';
$sql = "select * from urodziny where id_uzytk=$id order by month(data_urodzenia) asc";
$wynik = $polaczenie -> query($sql);
echo '<center><h1>Urodziny!</h1></center>';
echo '<center>';
echo '<table border>';
echo '<th>Imie<th>Nazwisko<th>Data urodzenia<th>Wiek<th>Kartka';
while (($rekord=$wynik -> fetch_assoc()) != null)
{
	if (date("m-d") == date("m-d",strtotime($rekord['data_urodzenia']))  || date("m-d") > date("m-d",strtotime($rekord['data_urodzenia'])))
	{
		$wiek = date("Y-m-d")-$rekord['data_urodzenia'];
	}
	else
	{
	$wiek = date("Y-m-d")-$rekord['data_urodzenia']-1;
	}
	$urodziny = date("m-d",strtotime($rekord['data_urodzenia'])); //sprawdza czy dzis urodziny
	
	if (date("m-d")==$urodziny) //jesli ma dzis urodziny
	{
		echo '<tr bgcolor=red>';
		echo '<td>'.$rekord['imie_sol'].'</td>';
		echo '<td>'.$rekord['nazwisko_sol'].'</td>';
		echo '<td>'.$rekord['data_urodzenia'].'</td>';
		echo '<td>'.$wiek.'</td>';
		echo '<td><a href=kartka.php?to_for='.$rekord['id_urodzin'].'>Pobierz</a>';
	}
	else
	{
		
	echo '<tr>';
	echo '<td>'.$rekord['imie_sol'].'</td>';
	echo '<td>'.$rekord['nazwisko_sol'].'</td>';
	echo '<td>'.$rekord['data_urodzenia'].'</td>';
	echo '<td>'.$wiek.'</td>';
	echo '<td>-</td>';
	}
	
	
}
echo '</table>';
echo '<br>';
echo '<center><a href=projekt_glowna.php>Powrót do głównego menu</a></center>';

?>