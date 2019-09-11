<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<center><h1>Pyramid16</h1></center>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	
	for($col=$fearn;$col>=1;$col--){
		echo($col);
	}
	for($col=1;$col<=5-$fearn;$col++){
		echo("  ");
	}
	for($col=$fearn;$col>=1;$col--){
		echo("*");
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>