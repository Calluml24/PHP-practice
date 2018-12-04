<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "testproject";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection as failed: ".mysqli_connect_error());
}

?>
