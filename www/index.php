<?php
	include 'header.php';
?>

	<script src="/res/optica.js"></script>

	<div id="camera_controls" class="floatleft">
		<table cellpadding="2" cellspacing="0" border="0">
			<tr>
				<td></td>
				<td>
					<a class="camera_control" axis="tilt" increment="10"><img src="/images/direction_up.png" width="80"></a></li>
				</td>
				<td valign="top" align="right">
					<a id="camera_reset"><img src="/images/power_black.png" width="32"></a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="camera_control" axis="pan" increment="-10"><img src="/images/direction_left.png" width="80"></a></li>
				</td>
				<td>
					<a id="take_photo"><img src="/images/take_photo.png" width="80"></a>
				</td>
				<td>
					<a class="camera_control" axis="pan" increment="10"><img src="/images/direction_right.png" width="80"></a></li>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<a class="camera_control" axis="tilt" increment="-10"><img src="/images/direction_down.png" width="80"></a></li>
				</td>
				<td></td>
			</tr>
		</table>

		<div class="clear"></div>
	</div>
<div class="clear"></div>
	<div id="snapshot_wrapper" class="floatleft">
		<div id="snapshot_message"></div>
		<div class="clear"></div>
		<img id="snapshot" src="/images/output.jpg" width="600"/>
	</div>
	<div class="clear"></div>

<form id="camera_params">
	<table width="400" cellpadding="2" cellspacing="0" border="0">
		<tr>
			<td>Width</td>
			<td><input type="text" name="width" value="800"></td>
		</tr>
		<tr>
			<td>Height</td>
			<td><input type="text" name="height" value="600"></td>
		</tr>
		<tr>
			<td>Horizontal flip</td>
			<td>
				<select name="hflip">
					<option value="True" selected>Yes</option>
					<option value="">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Quality</td>
			<td>
				<select name="quality">
					<option value=""></option>
					<?php
						for ($i=10; $i<=100; $i=$i+10) {
					?>
						<option value="<?=$i?>"><?=$i?>%</option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Rotation</td>
			<td>
				<select name="rotation">
					<option value=""></option>
					<?php
						for ($i=0; $i<=359; $i=$i+1) {
					?>
						<option value="<?=$i?>"><?=$i?> degrees</option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Output filename</td>
			<td><input type="text" name="output" value="/images/output.jpg"></td>
		</tr>
		<tr>
			<td>Milliseconds before picture</td>
			<td><input type="text" name="timeout" value="1000"></td>
		</tr>
		<tr>
			<td>Sharpness</td>
			<td>
				<select name="sharpness">
					<option value=""></option>
					<?php
						for ($i=-100; $i<=100; $i=$i+10) {
					?>
						<option value="<?=$i?>"><?=$i?>%</option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Contrast</td>
			<td>
				<select name="contrast">
					<option value=""></option>
					<?php
						for ($i=-100; $i<=100; $i=$i+10) {
					?>
						<option value="<?=$i?>"><?=$i?>%</option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Brightness</td>
			<td>
				<select name="brightness">
					<option value=""></option>
					<?php
						for ($i=10; $i<=100; $i=$i+10) {
					?>
						<option value="<?=$i?>"><?=$i?>%</option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Saturation</td>
			<td>
				<select name="saturation">
					<option value=""></option>
					<?php
						for ($i=-100; $i<=100; $i=$i+10) {
					?>
						<option value="<?=$i?>"><?=$i?>%</option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>ISO</td>
			<td>
				<select name="ISO">
					<option value=""></option>
					<?php
						for ($i=100; $i<=800; $i=$i+100) {
					?>
						<option value="<?=$i?>"><?=$i?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Exposure mode</td>
			<td>
				<select name="exposure">
					<option value=""></option>
					<?php
						$exps = array("off","auto","night","nightpreview","backlight","spotlight","sports","snow","beach","verylong","fixedfps","antishake","fireworks");
						foreach ($exps as $exp) {
					?>
						<option value="<?=$exp?>"><?=$exp?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Auto white balance</td>
			<td>
				<select name="awb">
					<option value=""></option>
					<?php
						$exps = array("off","auto","sun","cloud","shade","tungsten","fluorescent","incandescent","flash","horizon");
						foreach ($exps as $exp) {
					?>
						<option value="<?=$exp?>"><?=$exp?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Image effect</td>
			<td>
				<select name="imxfx">
					<option value=""></option>
					<?php
						$exps = array("none","negative","solarise","posterize","whiteboard","blackboard","sketch","denoise","emboss","oilpaint","hatch","gpen","pastel","watercolour","film","blur","saturation","colourswap","washedout","posterise","colourpoint","colourbalance","cartoon");
						foreach ($exps as $exp) {
					?>
						<option value="<?=$exp?>"><?=$exp?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Metering</td>
			<td>
				<select name="metering">
					<option value=""></option>
					<?php
						$exps = array("average","spot","backlit","matrix");
						foreach ($exps as $exp) {
					?>
						<option value="<?=$exp?>"><?=$exp?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
	</table>
</form>

	<div class="clear"></div>
<a href="converted.mp4">converted.mp4</a>
<a href="converted.flv">converted.flv</a>
<a href="raw.h264">raw</a>
<a href="converted.mkv">converted.mkv</a>
<?php
	include 'footer.php';
?>
