<?php
	include_once('../PSDReader.php');
	header("Content-type: image/jpeg");
	echo imagejpeg( imagecreatefrompsd('monkey_bw.psd') );
?>