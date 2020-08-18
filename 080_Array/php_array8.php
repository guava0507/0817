<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	//var_dump($testArray);
	foreach($testArray as $value){
		echo $value.".";
	}
	echo "<br />";
	
	natsort($testArray);
	foreach($testArray as $value)
	{
		echo $value.".";
	}
	
	//var_dump($testArray);
?>
