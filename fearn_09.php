<?php include("header1.php");?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=3;$col<=1+$fearn;$col++) {
	echo(" ");
	}
	for($col=0;$col<=5-$fearn;$col++){
		echo($fearn);
	}
	for($col=0;$col<=4-$fearn;$col++){
		echo($fearn);
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>