<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<center><h1>Pyramid13</h1></center>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=2;$col<=$fearn;$col++) {
	echo("  ");
	}
	for($col=11;$col>=11;$col--){
		echo($col-$fearn-$fearn);
	}
	for($col=10;$col>=6+$fearn;$col--){
		echo($col-$fearn-$fearn);
	}
	for($col=5;$col>=1+$fearn;$col--){
		echo($col-$fearn);
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>