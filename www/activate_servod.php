<?php
	$output = shell_exec('echo "hickup" | sudo -S killall servod');
	$output = shell_exec('echo "hickup" | sudo -S /home/pi/servo-pi/PiBits/ServoBlaster/servod 2>&1');
?>
<?=$output?>
