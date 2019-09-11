<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=$fearn;$col<=7;$col++){
		echo("*");
	}
	
	echo($fearn);
	for($col=1;$col<=$fearn;$col++){
		echo("*");
	}
	for($col=$fearn;$col<=$fearn;$col++){
		echo(8-$fearn);
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>