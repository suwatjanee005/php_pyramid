<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=4;$fearn++) {
	for($col=$fearn;$col<=$fearn;$col++) {
		echo($col);
	}
	for($col=$fearn;$col<=$fearn;$col++) {
		echo($col+4);
	}
	
	for($col=0;$col<=3+$fearn;$col++) {
		echo("*");	
	}
	
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>
