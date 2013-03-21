<?php
$filelist = array();
$dir = '/images/archive';
if ($files = opendir('.'.$dir)) {
    while (false !== ($file = readdir($files))) {
        if ($file != "." && $file != "..") {
            $filelist[] = $file;
        }
    }
    closedir($files);

    // sort them alphabetically
    sort($filelist, SORT_LOCALE_STRING);
}
?>
<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
	
	<body style="margin:0;padding:0;">
		<script type="text/javascript">
			var files = [
				<?php
					$num_files = count($filelist);
					for ($x=0;$x<$num_files;$x++) {
						echo '"'.$filelist[$x].'"';
						if ($x < $num_files-1)
							echo ',';
					}
				?>
			]

			var file_num = 0;
			function displayFile() {
				var filename = '<?=$dir?>/'+files[file_num];
				$('#timelapse img').attr('src', filename);
				$('#timecode').html(filename);
				file_num++;
				if (file_num == files.length)
					clearInterval(timelapse);
			}
			
			var timelapse = setInterval(displayFile, 100);
		</script>

		<div id="timelapse">
			<img width="500">
		</div>
		<div id="timecode">
		</div>
	</body>
</html>