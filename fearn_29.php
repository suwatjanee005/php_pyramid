<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<center><h1>Pyramid29</h1></center>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	echo($fearn);
	echo("*");
	echo(2+$fearn);
	for($col=1;$col<=2+$fearn;$col++) {
		echo("*");
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>