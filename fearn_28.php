<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=5;$col>=$fearn;$col--) {
		echo($col);
	}
	
	for($col=1;$col<=$fearn;$col++) {
		echo("*");
	}
	
	for($col=2;$col<=$fearn;$col++) {
		echo("*");
	}
	for($col=$fearn;$col<=5;$col++) {
		echo($col);
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>