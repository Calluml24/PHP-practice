<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "testproject";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
	{
		die("Error connecting to the server....."."mysqli_connect_error");	
	} /*else 
		{
			echo "You are connected to Callum Luckings server";
		}*/

?>
