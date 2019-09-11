<?php include("header1.php"); ?>
<?php include ("font_f.php");?>
<?php
for($fearn=1;$fearn<=4;$fearn++) {
	for($col=1;$col<=4-$fearn;$col++) {
		/*àÃÔèÁµé¹ ;ÊÔé¹ÊØ´;¡ÒÃàÅ×èÍ¹ä» (à¾ÔèÁ¢Ñé¹ / Å´Å§)*/
	echo(" ");
	}
	echo($fearn);
	for($col=2;$col<=$fearn;$col++){
	echo("**");
	}
	echo($fearn);
	echo "<br/>";
}
for($fearn=3;$fearn>=1;$fearn--) {
	for($col=1;$col<=4-$fearn;$col++) {
	echo(" ");
	}
	echo($fearn);
	for($col=2;$col<=$fearn;$col++){
	echo("**");
	}
	echo($fearn);
	echo "<br/>";
}
?>
<?php include("footer1.php"); ?>
