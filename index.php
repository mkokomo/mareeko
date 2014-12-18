<?php 
	include("lib/loader.php");
	include("inc/head.php"); 
	include("inc/header.php");
//	$pin_count = DB::queryFirstField("SELECT COUNT(*) FROM pins");
//	echo $pin_count;
	$pins = DB::query("SELECT * FROM pins");
?>
<h1>pinspinspins</h1> 
<?php 
	foreach ($pins as $pin) {
		echo $pin['name'];
	}
?>
<?php
	include("inc/footer.php"); 