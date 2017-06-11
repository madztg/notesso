<?php

if (!isset ($_SESSION['log']))
{
	echo "<script type=\"text/javascript\">window.alert('Nie ma tak latwo! :) Najpierw się zaloguj!'); window.location.href = 'projekt_logowanie.html';</script>"; 
		exit;
}
?>