<?php
//this should create an image

$test = imagecreatefromjpeg('alu.jpg'); //this line should print out the desired result on the screen
/*$test2 = imagecreatefromjpeg($_GET)*/
header("Content-Type: image/jpeg");

if(!test)
	{
		echo "Cannot find the picture";
	} else
		{
			imagejpeg($test);	
			imagedestroy($test);
		}
?>

