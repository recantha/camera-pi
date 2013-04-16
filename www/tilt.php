<?php
	$output = shell_exec('echo "hickup" | sudo -S /home/pi/servo-pi/drive-servo.py 1 ' . $_GET['position'] . '');
	// 2>&1
?>

<?=$output?>
