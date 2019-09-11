<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<center><h1>Pyramid4</h1></center>

<?php
for($fearn=1;$fearn<=4;$fearn++) {
	for($col=1;$col<=$fearn;$col++) {
		echo("*");
	}
	
	for($col=$fearn;$col>=2;$col--){
		echo($col);
	}
	
	for($col=1;$col<=$fearn;$col++){
		echo($col);
	}
	
	echo "<br/>";
}
?>

<?php include("footer1.php"); ?>
