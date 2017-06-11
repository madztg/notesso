<?php
require 'sprawdzins.php';
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Notesso 2.0</title>
    <link rel="stylesheet" type="text/css" href="styl.css" />
</head>
<body>

<center><h1>Zaplanuj coś!</h1></center>
<center>
<form action="plany.php" method="post">
<label>Nazwa: </label><input type="text" name="nazwa" required /><br>
<label>Data: </label><input type="date" name="data_planu" required /><br>
<label>Szczegóły: </label><textarea name="tresc"></textarea>
<input type="submit" /></form>
</center>
<center><a href=projekt_glowna.php>Powrót do głównego menu</a></center>
</body>
