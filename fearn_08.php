<?php include("header1.php");?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=7;$fearn++) {
	for($col=3;$col<=1+$fearn;$col++) {
	echo(" ");
	}
	for($col=$fearn;$col<=$fearn;$col++){
		echo($fearn);
		echo($fearn+1);
		echo($fearn+2);
	}
	for($col=2;$col<=2+$fearn;$col++){
		echo("*");
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>