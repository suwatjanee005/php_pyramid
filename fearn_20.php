<?php include("header1.php");?>
<?php include ("font_f.php");?>
<center><h1>Pyramid20</h1></center>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=1;$col<=$fearn;$col++) {
		echo($fearn);	
	}
	for($col=1;$col<=$fearn;$col++) {
		echo("*");	
	}
	for($col=1;$col<=$fearn;$col++) {
		echo($fearn);	
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>