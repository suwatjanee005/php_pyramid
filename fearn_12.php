<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<center><h1>Pyramid12</h1></center>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=2;$col<=$fearn;$col++) {
	echo(" ");
	}
	for($col=$fearn;$col<=10-$fearn;$col++){
		echo($col);
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>