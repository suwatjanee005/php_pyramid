<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=2;$col<=0+$fearn;$col++) {
		echo(" ");
	}
	
	for($col=$fearn;$col<=$fearn;$col++) {
		echo($fearn);
	}
	
	echo($fearn+1);
	for($col=1;$col<=5-$fearn;$col++){
		echo("  ");
	}
	
	for($col=$fearn;$col<=$fearn;$col++) {
		echo($fearn+1);
	}
	
	echo($fearn);
	
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>