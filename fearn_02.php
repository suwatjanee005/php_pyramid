<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<center><h1>Pyramid2</h1></center>

<?php
for($fearn=1;$fearn<=4;$fearn++) {
	for($col=$fearn;$col<=$fearn+2;$col++) {
		echo($col);
	}
	
	for($col=0;$col<=1+$fearn;$col++){
		echo("*");	
	}
	
	echo "<br/>";
}
?>

<?php include("footer1.php"); ?>
