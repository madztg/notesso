<?php
session_start();
require 'styl.php';
require 'projekt_polaczenie.php';
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';

?>


<center><form method="post" action="przeloz.php">
<label>Data planu: </label><input type="date" name="data_planu" min="<?php echo date("Y-m-d") ?>"required /><br>
<input type="hidden" name="plan" value="<?php echo $_GET['to_plan']?>">
<input type="submit" value="Submit" name="submit" /></form></center>

<?php
if(isset($_POST['submit']))
{
	$plan = $_POST['plan'];

$sql = "select * from plany where id_planu=$plan";
$wynik = $polaczenie->query($sql);
$rekord=$wynik->fetch_assoc();



	$zmiana = "update plany set data_planu='".$_POST['data_planu']."' where id_planu=$plan";
	$polaczenie->query($zmiana);
	echo "<script type=\"text/javascript\">window.alert('Termin przelozony, ".$_SESSION['log']."!'); window.location.href = 'wyswietl_plany.php';</script>"; 
	exit;

}

else
{
	echo '<center>Wpisz datę!</center><br>';
}

echo '<center><a href=projekt_glowna.php>Powrót do głównego menu</a></center>';


?>