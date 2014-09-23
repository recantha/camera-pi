<?php
	$output = shell_exec('/home/pi/servo-pi/drive-servo.py 0 ' . escapeshellarg($_GET['position']));
#	$output = shell_exec('echo "hickup" | sudo -S /home/pi/servo-pi/drive-servo.py 0 ' . $_GET['position'] . '');
	// 2>&1
?>

<?=$output?>
