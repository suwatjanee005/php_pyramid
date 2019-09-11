<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	echo("*");
	for($col=2;$col<=$fearn;$col++) {
		echo(" ");	
	}
	
	for($col=0;$col<=5-$fearn;$col++){
		echo($fearn);
	}
	for($col=0;$col<=4-$fearn;$col++){
		echo($fearn);
	}
	for($col=2;$col<=$fearn;$col++) {
		echo(" ");	
	}
	echo("*");
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>