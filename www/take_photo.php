<?php
	$url = 'echo "hickup" | raspistill';

	$args = array("width", "height", "quality", "timeout", "thumbnail", "sharpness", "contrast", "brightness", "saturation", "ISO", "exposure", "awb", "imxfx", "hflip", "metering", "rotation");

	foreach ($args as $arg) {
		if ($_GET[$arg] == 'True') {
			$url = $url . " --" .$arg;
		} elseif (strlen(($_GET[$arg])) > 0) {
			$url = $url . " --" .$arg. " " . $_GET[$arg];
		}
	}

	$arg = "output";
	if (strlen(($_GET[$arg])) > 0) {
		$url = $url . " --" .$arg. " /home/pi/camera-pi/www" . $_GET[$arg];
	}

	echo "<p>" . $url . "</p>";
	
	$url = $url . " 2>&1";
	
	$output = shell_exec($url);
	
	echo "<pre>" . $output . "</pre>";
?>

<!--img src="<?=$_GET["output"]?>"-->
