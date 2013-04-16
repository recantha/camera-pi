<?php
	$output = shell_exec('/home/pi/camera-pi/snapshot-timestamped.sh 2>&1')
?>
<img src="/images/snapshots/<?=$output?>" style="height:100%"/>
