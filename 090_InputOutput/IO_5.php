<?php
	$contents = file_get_contents('data.txt');
	echo (str_replace("\r\n", "<br />", $contents));

	// file("檔名") => 陣列
	// file_get_contents => 字串
?>