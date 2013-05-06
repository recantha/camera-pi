<?php
	$output = shell_exec('/home/pi/servo-pi/drive-servo.py 1 ' . $_GET['position']);
	// 2>&1
?>

<?=$output?>
