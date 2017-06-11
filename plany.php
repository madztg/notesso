<?php
session_start();
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';

if($_POST['data_planu'] < date("Y-m-d"))
{
	echo "<script type=\"text/javascript\">window.alert('Nie mozna planowac wstecz, ".$_SESSION['log']."!'); window.location.href = 'dodajplany.php';</script>"; 
exit;	
}
else
{
$polaczenie = new PDO('mysql:host=localhost;dbname=notes','root','');
$dodawanie = $polaczenie->prepare ('insert into plany (id_uzytk, nazwa, tresc, data_planu) values (:id_uzytk, :nazwa, :tresc, :data_planu)');
$dodawanie->bindParam(':id_uzytk',$id,PDO::PARAM_STR);
$dodawanie->bindParam(':nazwa',$_POST['nazwa'],PDO::PARAM_STR);
$dodawanie->bindParam(':tresc',$_POST['tresc'],PDO::PARAM_STR);
$dodawanie->bindParam(':data_planu',$_POST['data_planu'],PDO::PARAM_STR);
$dodawanie->execute();

echo "<script type=\"text/javascript\">window.alert('Plany dodane pomyslnie, ".$_SESSION['log']."!'); window.location.href = 'projekt_glowna.php';</script>"; 
exit;	
}
?>
