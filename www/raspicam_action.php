<?php
	$url = 'echo "hickup" | sudo -S /opt/vc/bin/raspicam';

	$args = array("width", "height", "quality", "timeout", "thumbnail", "sharpness", "contrast", "brightness", "saturation", "ISO", "exposure", "awb", "imxfx");

	foreach ($args as $arg) {
		if (strlen(($_POST[$arg])) > 0) {
			$url = $url . " --" .$arg. " " . $_POST[$arg];
		}
	}

	$arg = "output";
	if (strlen(($_POST[$arg])) > 0) {
		$url = $url . " --" .$arg. " /home/pi/camera-pi/www" . $_POST[$arg];
	}

	echo "<p>" . $url . "</p>";
	
	$url = $url . " 2>&1";
	
	$output = shell_exec($url);
	
	echo "<pre>" . $output . "</pre>";
?>

<img src="<?=$_POST["output"]?>">