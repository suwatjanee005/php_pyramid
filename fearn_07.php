<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=7;$fearn++) {
	for($col=0;$col<=7-$fearn;$col++) {
	echo(" ");
	}
	for($col=1;$col<=1;$col++){
		echo($col);
	}
	for($col=3;$col<=1+$fearn;$col++){
		echo($col-1);
	}
		echo($fearn);
	for($col=$fearn;$col>=1;$col--){
		echo($col);
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>