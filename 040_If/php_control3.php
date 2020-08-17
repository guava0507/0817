<?php
	$score = 95;
	if ($score >=60 && $score < 70) 
	{
		echo 'D';
	}
	else if ($score>=70 && $score<80) 
	{
		echo 'C';
	} 
	else if ($score>=80 && $score<90) 
	{
		echo 'B';		
	} 
	else if ($score>=90 && $score<=100) 
	{
		echo 'A';		
	}
	else 
	{
		echo 'Fail';
	}
?>