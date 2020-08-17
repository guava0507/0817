<?php
$s = "012345671289";

$pos = strpos($s,"012");

if($pos !== false)
{
    echo "found:$pos";
}
else
{
    echo "not found";
}
?>