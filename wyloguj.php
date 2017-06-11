<?php
session_start();
session_destroy();
echo "<script type=\"text/javascript\">window.alert('Wylogowano!'); window.location.href = 'projekt_logowanie.html';</script>"; 
		exit;

?>