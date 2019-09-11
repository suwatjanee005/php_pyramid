<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=5;$fearn++) {
	for($col=$fearn;$col<=$fearn;$col++) {
		echo($col);
		echo(10-$fearn);
		echo($col);
		echo(10-$fearn);
		echo($col);
		echo(10-$fearn);
		echo($col);
		echo(10-$fearn);
	}
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>