<?php
$myArray['myName'] = 'Jeremy';
$myArray['myHeight'] = 191;
$myArray['myWeight'] = 91;
//echo "Hello! My name is " . $myArray['myName'];

   foreach($myArray as $key => $value)
   {
    echo $key.$value."<br>";
   }

?>