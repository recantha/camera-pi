<?php
	include 'header.php';
?>

	<ul>
		<li><a href="raspicam.php">Raspicam</a></li>
		<li><a href="raspivid.php">Raspivid</a></li>
		<li><a href="snapshot.php">Snapshot</a></li>
	</ul>

	<ul>
		<li><a class="camera_control" axis="pan" increment="-10">Pan right</a></li>
		<li><a class="camera_control" axis="pan" increment="10">Pan left</a></li>
		<li><a class="camera_control" axis="tilt" increment="-10">Tilt down</a></li>
		<li><a class="camera_control" axis="tilt" increment="10">Tilt up</a></li>
	</ul>

<video width="800" height="600" controls>
<source src="out.ogv" type='video/ogg; codecs="theora, vorbis"'>
</video>
<?php
	include 'footer.php';
?>
