<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<center><h1>Pyramid35</h1></center>
<?php
for($fearn=0;$fearn<=4;$fearn++) {
	echo($fearn+1);
	echo("*");
	for($col=1;$col<=1;$col++){
		echo($col+$fearn+$fearn);
	}
	echo("*");
	for($col=2;$col<=2;$col++){
		echo($col+$fearn+$fearn);
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>