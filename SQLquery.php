<?php
include("serverConnection.php");

$query = "SELECT * FROM users";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result))
	{	
		$username = $row['username'];
		$password = $row['password'];
		echo("$username, $password <br>");
	}

?>
<html>
<body>
	
<p> This is a table attempt for a SQL query search using a while loop </p>	
<?php 

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result))
	{
		$username = $row["username"];
		$password = $row["password"];
		echo "<table>";
			echo"<tr>";
				echo"<th> Username </th>";
				echo"<th> Password </th>";
			echo"</tr>";
			echo"<tr>";
				echo"<td>".$username."</td>";
				echo"<td>".$password."</td>";
			echo"</tr>";
		echo"</table>";				
	}	
?> 
<br><br>
<p>This is an SQL search which just pulls in the usernames</p>
<?php

$query = "SELECT username FROM users";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result))
	{
		$username = $row["username"];
		echo "Username: $username <br> ";
	}

?>
<br><br>
<p> Final SQL statement search which will just pull in the Passwords </p>
<?php

$query = "SELECT password FROM users";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result))
	{
		$password = $row["password"];
		echo "User Password: $password <br> "; //will print the text directly out with no thrills
		/*echo"<br><br>";
		echo "<table>";
			echo"<tr>";
				echo"<th> Password </th>";		//This will generate a table containing a list of passwords only
				echo"<td>".$password."</td>";
			echo"</tr>";
		echo"</table>";	*/	
	}
?>

</body>
</html>
