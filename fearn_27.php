<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	echo($fearn);
	for($col=1;$col<=$fearn;$col++) {
		echo(" ");	
	}
	
	for($col=1;$col<=$fearn;$col++) {
		echo("*");	
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>