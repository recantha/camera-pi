<html>
	<head>
		<style type="text/css">
			.clear { clear:both; }
			body { font-family: Verdana; }
		</style>
	</head>

	<body>
		<img src="/images/logo.jpg" align="right"/>
		<h1>Oculus</h1>
		<h2>Raspberry Pi Camera Module testbed</h2>

		<h3>Stills with raspicam</h3>
		<form action="raspicam.php" method="post" target="_blank">
			<table width="400" cellpadding="2" cellspacing="0" border="0">
				<tr>
					<td>Width</td>
					<td><input type="text" name="width" value="400"></td>
				</tr>
				<tr>
					<td>Height</td>
					<td><input type="text" name="height" value="300"></td>
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
					<td>Output filename</td>
					<td><input type="text" name="output" value="/images/output.jpg"></td>
				</tr>
				<tr>
					<td>Milliseconds before picture</td>
					<td><input type="text" name="timeout" value="500"></td>
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
					<td></td>
					<td>
						<input type="submit" name="submit" value="submit"/>
					</td>
				</tr>
			</table>
		</form>

		<div class="clear"></div>
		<hr>
		<div class="clear">
			<h4>Help</h4>
			<ul>
				<li><a href="raspicam_help.php">raspicam</a></li>
				<li><a href="raspivid_help.php">raspivid</a></li>
			</ul>
		</div>
	</body>
</html>