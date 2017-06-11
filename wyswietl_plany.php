<?php
session_start();
require 'styl.php';
require 'projekt_polaczenie.php';
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';
require 'sprawdzsel.php';
$sql = "select * from plany p join uzytkownicy u on u.id_uzytk=p.id_uzytk where p.id_uzytk=$id order by data_planu asc";
$wynik = $polaczenie -> query($sql);
$rekord=$wynik -> fetch_assoc();

echo '<center><h1>Twoje plany</h1></center>';
echo '<center>';
echo '<table border>';
echo '<th>Data<th>Nazwa<th>Szczegóły';
if ($rekord['upd']==1)
{
	echo '<th>Przełóż</th>';
}
if ($rekord['del']==1)
{
	echo '<th>Usuń</th>';
}

$sql = "select * from plany p join uzytkownicy u on u.id_uzytk=p.id_uzytk where p.id_uzytk=$id order by data_planu asc";
$wynik = $polaczenie -> query($sql);

while (($rekord = $wynik -> fetch_assoc()) != null)
{
  if(date("Y-m-d") < date("Y-m-d", strtotime($rekord['data_planu']))) 
  {
	echo '<tr>';
	echo '<td>'.$rekord['data_planu'].'</td>';
	echo '<td>'.$rekord['nazwa'].'</td>';
	echo '<td>'.$rekord['tresc'].'</td>';
	
	if ($rekord['upd']==1)
	{
		echo '<td><a href=przeloz.php?to_plan='.$rekord['id_planu'].'>Zmień</a></td>';
	}
	
	if ($rekord['del']==1)
	{
		echo '<td><a href=usunplan.php?to_plan='.$rekord['id_planu'].'>Usuń</a></td>';
	}
	
	
}
}
echo '</table>';
echo '<br>';
echo '<center><a href=projekt_glowna.php>Powrót do głównego menu</a></center>';

?>

