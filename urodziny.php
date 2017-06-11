<?php
session_start();
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';

if(date("Y-m-d") < date("Y-m-d", strtotime($_POST['data_urodzenia'])))
{
	echo "<script type=\"text/javascript\">window.alert('Tego dnia jeszcze nie bylo ;)'); window.location.href = 'urodziny.html';</script>"; 
	exit;
}
else
{
$polaczenie = new PDO('mysql:host=localhost;dbname=notes','root','');
$dodawanie = $polaczenie->prepare ('insert into urodziny (id_uzytk, imie_sol, nazwisko_sol, data_urodzenia) values (:id_uzyt, :imie_sol, :nazwisko_sol, :data_urodzenia)');
$dodawanie->bindParam(':id_uzyt',$id,PDO::PARAM_STR);
$dodawanie->bindParam(':imie_sol',$_POST['imie_sol'],PDO::PARAM_STR);
$dodawanie->bindParam(':nazwisko_sol',$_POST['nazwisko_sol'],PDO::PARAM_STR);
$dodawanie->bindParam(':data_urodzenia',$_POST['data_urodzenia'],PDO::PARAM_STR);
$dodawanie->execute();

echo "<script type=\"text/javascript\">window.alert('Urodziny dodane pomyslnie, ".$_SESSION['log']."!'); window.location.href = 'projekt_glowna.php';</script>"; 
exit;
}
?>