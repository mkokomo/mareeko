<?php 
	include("lib/loader.php");
	include("inc/head.php"); 
	include("inc/header.php");
//	$pin_count = DB::queryFirstField("SELECT COUNT(*) FROM pins");
//	echo $pin_count;
	$pins = DB::query("SELECT * FROM pins");
?>
<article class="type-system-slab">
	<h1>Look at all these cool things!</h1>
	<h3><?php 
		foreach ($pins as $pin) {
			echo $pin['name'];
			echo '<br /><img src="' . $pin['image'] . '" alt="' . $pin["name"] . 'width="250" height="250"' . '">';
		}
	?></h3><br />
	<div class="button">this is one thing</div>
</article>
<?php
	include("inc/footer.php"); 