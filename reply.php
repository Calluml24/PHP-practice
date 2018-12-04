<?php

$first = $_REQUEST["firstname"];
$last = $_REQUEST["lastname"];
$password = $_REQUEST["password";
$bio = $_REQUEST["biography"];


if($password == NULL)
	{
		echo "You did not fill out the details correctly!";
		
	} else {
		echo "Your details are the following, requested by a php call: \r\n";
		echo "First Name: ".$first;
		echo "Surname: ".$last;
		echo "Password: ".$password." , I know, secure right....";
		echo "Biography: ".$bio;
	}
?>
