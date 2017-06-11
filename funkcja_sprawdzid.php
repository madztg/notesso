<?php

require 'projekt_polaczenie.php';
$sql = "select id_uzytk from uzytkownicy where login ='".$_SESSION['log']."'";
$wynik = $polaczenie -> query($sql);
$rekord=$wynik -> fetch_assoc();
$id = $rekord['id_uzytk'];

?>