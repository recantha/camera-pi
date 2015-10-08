<?php
	$output = shell_exec('/home/pi/servo-pi/drive-servo.py 1 ' . escapeshellarg($_GET['position']));
	// 2>&1
?>

<?=$output?>
