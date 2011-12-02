<?php
	include_once('../PSDReader.php');
	header("Content-type: image/jpeg");
	echo imagejpeg( imagecreatefrompsd('text_transparent_bg.psd') );
?>