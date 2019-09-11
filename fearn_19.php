<?php include("header1.php");?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=$fearn;$col<=$fearn;$col++) {
		echo($col);	
	}
	
	for($col=$fearn;$col<=9;$col++){
		echo("*");
	}
	for($col=2;$col<=$fearn;$col++){
		echo(" ");
	}
	
	for($col=$fearn;$col<=$fearn;$col++){
		echo(6-$fearn);
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>