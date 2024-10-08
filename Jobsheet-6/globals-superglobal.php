<?php
$x = 75;
$y = 25;

function Addition() {
	$GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
}

Addition();
echo $z;
?>
