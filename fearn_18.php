<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=$fearn;$col<=$fearn;$col++) {
		echo($col);	
	}
	for($col=1;$col<=$fearn;$col++) {
		echo("*");
	}
	echo($col-1);
	for($col=1;$col<=6-$fearn;$col++) {
		echo("*");
	}
	echo($col+3);
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>