<?php
//dodawanie uzytkownika
$upr = 1;
$polaczenie = new PDO('mysql:host=localhost;dbname=notes','root','');
$dodawanie = $polaczenie->prepare ('insert into uzytkownicy (login, haslo) values (:login, :haslo)');
$dodawanie->bindParam(':login',$_POST['login'],PDO::PARAM_STR);
$dodawanie->bindParam(':haslo',sha1($_POST['haslo']),PDO::PARAM_STR);
$dodawanie->execute();
?>