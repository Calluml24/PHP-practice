<?php

$email = $_REQUEST["email"];
$message = $_REQUEST["message"];

ini_set("sendmail_from", "w7i78@students.keele.ac.uk");
$mailSuccess = mail("$email", "the subject - testing connection", "$message");
if($mailSuccess)
	{
		echo "Success you have sent an email via PHP mail() function";
	} else 
		{
			echo "This bit of code you wrote doesn't seem to work... ";
		}

?>
