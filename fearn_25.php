<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<center><h1>Pyramid25</h1></center>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=1;$col<=5-$fearn;$col++) {
		echo("*");	
	}
	
	for($col=1;$col<=$fearn;$col++){
		echo(6-$fearn);
	}
	for($col=2;$col<=$fearn;$col++){
		echo(6-$fearn);
	}
	for($col=0;$col<=5-$fearn;$col++) {
		echo("*");	
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>