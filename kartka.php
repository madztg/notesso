<?php
header("Content-Type:application/msword");
header ("Content-Disposition: attachment; filename='kartka.doc'");
$polaczenie = new mysqli('localhost','root','','notes');
$sql = "select * from urodziny where id_urodzin=$_GET[to_for]";
$wynik = $polaczenie->query($sql);
$rekord=$wynik->fetch_assoc();
$imie = $rekord['imie_sol'];
$wiek = date("Y-m-d")-$rekord['data_urodzenia'];

$plik = "szablon.rtf";
$szablon = fopen($plik, 'r');
$dane = fread($szablon, filesize($plik));
$dane = str_replace("<<imie>>", $imie, $dane);
$dane = str_replace("<<wiek>>", $wiek, $dane);
echo $dane;

?>