<?php
	include_once('../PSDReader.php');
	header("Content-type: image/jpeg");
	echo imagejpeg( imagecreatefrompsd('test.psd') );
?>