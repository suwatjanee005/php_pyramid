<?php include("header1.php"); ?>
<?php include("font_f.php");
for($fearn=1;$fearn<=3;$fearn++) {
	for($col=1;$col<=3-$fearn;$col++) {
		
		echo (" ");
	}
		echo ("*");
	for($col=2;$col<=$fearn;$col++){
		echo ($col);
	}
	for($col=$fearn;$col<=$fearn;$col++) {
		
		echo ($col);
	}
	for($col=$fearn;$col>=2;$col--){
		echo ($col);
	}
		echo ("*");
	for($col=1;$col<=3-$fearn;$col++) {
		
		echo (" ");
	}
		echo "<br>";
}
for($fearn=2;$fearn>=1;$fearn--) {
	for($col=1;$col<=3-$fearn;$col++) {
		echo (" ");
	}
	
		echo ("*");
	for($col=1;$col<=$fearn;$col++){
		echo ($fearn);
	}
	
	for($col=2;$col<=$fearn;$col++){
		echo ($col);
	}
		echo ("*");
	for($col=1;$col<=3-$fearn;$col++) {
		echo (" ");
	}
	echo "<br>";
}
?>
<?php include("footer1.php"); ?>