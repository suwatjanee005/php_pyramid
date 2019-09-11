<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<center><h1>Pyramid6</h1></center>

<?php
for($fearn=1;$fearn<=7;$fearn++) {
	for($col=2;$col<=1+$fearn;$col++) {
	echo(" ");
	}
	for($col=1;$col<=1;$col++){
		echo($col);
	}
	for($col=$fearn;$col<=6;$col++){
		echo("01");
	}
	echo "<br/>";
}
?>

<?php include("footer1.php"); ?>
