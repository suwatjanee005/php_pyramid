
<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=$fearn;$col<=5;$col++) {
		echo($fearn);	
	}
	for($col=2;$col<=$fearn;$col++) {
		echo("  ");
	}
	for($col=0;$col<=5-$fearn;$col++) {
		echo("*");	
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>