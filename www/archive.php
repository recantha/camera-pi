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

			$(document).ready(function() {
				function displayFile(file_num) {
					var filename = files[file_num];
					var photoPath = '<?=$dir?>/'+files[file_num];
					
					$('#timecode').html('Photo '+file_num+': '+files[file_num]);

					var $img = $('<img/>')
						.attr('src', photoPath)
						.attr('id', 'image_'+file_num)
						.css({
							'width': '500'
						});
					;
					$img.load(function() {
						$('#timelapse_target img').remove();
						$('#timelapse_target').append($img);
	
						hold(5, function() {
							file_num++;
							if (file_num != files.length-1) {
								displayFile(file_num);
							}
						});
					})
				}

				function hold(delay, callback) {
					var $div = $('<div id="delayer" style="display:none"><div id="hold"></div></div>');
					$('body').append($div);
					console.log("Delaying for "+delay)
					$div.fadeIn(delay, function() {
						console.log('finish delay');
						$div.remove();
						
						if(typeof callback == 'function') {
							callback();
						}
					})
				}

				$('#timelapse_target').show();
				$('#preloader').hide();
				displayFile(0);
			})
		</script>

	</head>
	
	<body style="margin:0;padding:0;">
		<div id="preloader">
			Pre-loading images for timelapse
		</div>
		<div id="timelapse">
			<div id="timelapse_target" style="display:none"></div>
		</div>
		<div id="timecode">
		</div>
	</body>
</html>