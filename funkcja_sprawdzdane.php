<?php

function sprawdzDane($haslo, $haslo2, $login)
{	
	require 'projekt_polaczenie.php';
	$sql = "select login from uzytkownicy where login='$login'";
	$wynik = $polaczenie -> query($sql);
	
	if (($rekord=$wynik -> fetch_assoc()) == 0) //sprawdza czy istnieje login w bazie
	{
	
	if ($haslo==$haslo2) //sprawdza czy haslo jest dobrze potwierdzone
	{
		require 'funkcja_rejestracja.php';
		header('Location: poprawna_rejestracja.html');
	}
	if ($haslo!=$haslo2) //jesli hasla sa nieidentyczne - error
	{
		echo "<script type=\"text/javascript\">window.alert('Hasla sie ze soba nie zgadzaja'); window.location.href = 'form_rejestracja.html';</script>"; 
		exit;	
		
	}
	}
	else
	{
		echo "<script type=\"text/javascript\">window.alert('Podany login juz istnieje w bazie!'); window.location.href = 'form_rejestracja.html';</script>"; 
		exit;
	}
	
}
sprawdzDane($_POST['haslo'], $_POST['haslo2'], $_POST['login']);

?>