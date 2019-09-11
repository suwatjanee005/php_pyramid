<?php include("header1.php"); ?>
<?php include("font_f.php");
for($fearn=1;$fearn<=3;$fearn++) {
	for($col=1;$col<=4-$fearn;$col++){
		echo ($fearn+$col-1);
	}
	for($col=1;$col<=$fearn;$col++){
		echo ("*");
	}
	for($col=2;$col<=$fearn;$col++){
		echo ("*");
	}
	for($col=3;$col>=$fearn;$col--){
		echo ($col);
	}
	echo "<br>";
}
for($fearn=2;$fearn>=1;$fearn--) {
	for($col=1;$col<=4-$fearn;$col++){
		echo ($fearn+$col-1);
	}
	for($col=1;$col<=$fearn;$col++){
		echo ("*");
	}
	for($col=3;$col<=1+$fearn;$col++){
		echo ("*");
	}
	
	for($col=3;$col>=$fearn;$col--) {
		echo ($col);
	}

	echo "<br>";
}
?>
<?php include("footer1.php"); ?>