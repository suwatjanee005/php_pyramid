<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=1;$col<=8-$fearn;$col++) {
		echo($col);	
	}
	for($col=1;$col<=2+$fearn;$col++) {
		echo("*");	
	}
	
	echo($fearn+2);
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>